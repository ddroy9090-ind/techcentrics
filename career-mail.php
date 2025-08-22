<?php
/* ---------------------------------------------------------
   Techcentrics Careers — mail.php
   Receives form POST, validates, saves files, emails with attachments.
   Works with PHP mail(); PHPMailer SMTP snippet optional at bottom.
----------------------------------------------------------*/

// ====== CONFIG ======
$TO_EMAIL   = 'info@tech-centrics.com';   // Where applications are sent
$TO_NAME    = 'Techcentrics Careers';
$FROM_EMAIL = 'no-reply@tech-centrics.com'; // Must exist on your domain to avoid spam
$SUBJECT    = 'New Career Application — Techcentrics';

$UPLOAD_DIR = __DIR__ . '/uploads';        // Make sure this folder exists & is writable (chmod 755/775)
$MAX_SIZE   = 8 * 1024 * 1024;             // 8MB per file
$ALLOWED_RESUME = ['application/pdf','application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
$ALLOWED_PHOTO  = ['image/jpeg','image/png','image/webp'];
// ====================

// Create upload dir if missing
if (!is_dir($UPLOAD_DIR)) { @mkdir($UPLOAD_DIR, 0775, true); }

// Helpers
function is_ajax() {
  return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');
}
function clean($v){ return trim(filter_var($v, FILTER_SANITIZE_STRING)); }
function respond($ok, $msg, $extra = []) {
  $payload = array_merge(['ok'=>$ok, 'message'=>$msg], $extra);
  if (is_ajax()) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
  } else {
    echo "<script>alert('" . htmlspecialchars($msg, ENT_QUOTES) . "'); window.history.back();</script>";
  }
  exit;
}

// Basic request method check
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  respond(false, 'Invalid request method.');
}

// Honeypot (bots)
if (!empty($_POST['website'])) {
  respond(true, 'Thanks!'); // pretend success to avoid tipping off bots
}

// Gather + validate fields
$name    = clean($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone   = clean($_POST['phone'] ?? '');
$position= clean($_POST['position'] ?? '');
$exp     = clean($_POST['experience'] ?? '');
$ctc     = clean($_POST['ctc'] ?? '');
$org     = clean($_POST['organization'] ?? '');
$city    = clean($_POST['city'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$phone || !$position || !$exp || !$ctc) {
  respond(false, 'Please fill in all required fields.');
}

// Handle files (optional)
$attachments = [];

// Resume
if (!empty($_FILES['resume']['name']) && is_uploaded_file($_FILES['resume']['tmp_name'])) {
  if ($_FILES['resume']['size'] > $MAX_SIZE) respond(false, 'Resume exceeds the 8MB limit.');
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mime  = finfo_file($finfo, $_FILES['resume']['tmp_name']); finfo_close($finfo);
  if (!in_array($mime, $ALLOWED_RESUME)) respond(false, 'Resume must be PDF/DOC/DOCX.');
  $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
  $target = $UPLOAD_DIR . '/' . uniqid('resume_', true) . '.' . strtolower($ext);
  if (!move_uploaded_file($_FILES['resume']['tmp_name'], $target)) respond(false, 'Failed to save resume.');
  $attachments[] = $target;
}

// Photo
if (!empty($_FILES['photo']['name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
  if ($_FILES['photo']['size'] > $MAX_SIZE) respond(false, 'Photo exceeds the 8MB limit.');
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mime  = finfo_file($finfo, $_FILES['photo']['tmp_name']); finfo_close($finfo);
  if (!in_array($mime, $ALLOWED_PHOTO)) respond(false, 'Photo must be JPG/PNG/WebP.');
  $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
  $target = $UPLOAD_DIR . '/' . uniqid('photo_', true) . '.' . strtolower($ext);
  if (!move_uploaded_file($_FILES['photo']['tmp_name'], $target)) respond(false, 'Failed to save photo.');
  $attachments[] = $target;
}

// Compose email (multipart with attachments)
$boundary = '==Multipart_Boundary_x' . md5(time()) . 'x';
$headers  = [];
$headers[] = "From: Techcentrics Careers <{$FROM_EMAIL}>";
$headers[] = "Reply-To: {$name} <{$email}>";
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: multipart/mixed; boundary=\"{$boundary}\"";

$bodyText = [];
$bodyText[] = "A new career application has been submitted:\r\n";
$bodyText[] = "Name:       {$name}";
$bodyText[] = "Email:      {$email}";
$bodyText[] = "Phone:      {$phone}";
$bodyText[] = "Position:   {$position}";
$bodyText[] = "Experience: {$exp}";
$bodyText[] = "Current CTC:{$ctc}";
$bodyText[] = "Organization:{$org}";
$bodyText[] = "City:       {$city}";
$bodyText[] = "Message:\r\n{$message}";
$bodyTextStr = implode("\r\n", $bodyText);

// Build message with attachments
$body  = "This is a multi-part message in MIME format.\r\n";
$body .= "--{$boundary}\r\n";
$body .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= $bodyTextStr . "\r\n\r\n";

foreach ($attachments as $filePath) {
  if (!file_exists($filePath)) continue;
  $fileName = basename($filePath);
  $fileData = chunk_split(base64_encode(file_get_contents($filePath)));
  $fileMime = mime_content_type($filePath) ?: 'application/octet-stream';

  $body .= "--{$boundary}\r\n";
  $body .= "Content-Type: {$fileMime}; name=\"{$fileName}\"\r\n";
  $body .= "Content-Transfer-Encoding: base64\r\n";
  $body .= "Content-Disposition: attachment; filename=\"{$fileName}\"\r\n\r\n";
  $body .= $fileData . "\r\n\r\n";
}

// Final boundary
$body .= "--{$boundary}--";

// Send
$sent = @mail("{$TO_NAME} <{$TO_EMAIL}>", $SUBJECT, $body, implode("\r\n", $headers));

if ($sent) {
  respond(true, 'Application sent successfully.');
} else {
  respond(false, 'Could not send email. If the issue persists, please contact us directly.');
}

/* ---------------------------------------------------------
 OPTIONAL: PHPMailer (SMTP) — if you want better deliverability

 // 1) Install PHPMailer (if Composer available)
 //    composer require phpmailer/phpmailer

 // 2) Then replace the "Send" section above with:

 // require __DIR__ . '/vendor/autoload.php';
 // $mail = new PHPMailer\PHPMailer\PHPMailer(true);
 // try {
 //   $mail->isSMTP();
 //   $mail->Host = 'smtp.yourhost.com';
 //   $mail->SMTPAuth = true;
 //   $mail->Username = 'smtp-user';
 //   $mail->Password = 'smtp-pass';
 //   $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
 //   $mail->Port = 587;

 //   $mail->setFrom($FROM_EMAIL, 'Techcentrics Careers');
 //   $mail->addAddress($TO_EMAIL, $TO_NAME);
 //   $mail->addReplyTo($email, $name);

 //   foreach ($attachments as $path) { $mail->addAttachment($path); }

 //   $mail->isHTML(false);
 //   $mail->Subject = $SUBJECT;
 //   $mail->Body    = $bodyTextStr;

 //   $mail->send();
 //   respond(true, 'Application sent successfully.');
 // } catch (Exception $e) {
 //   respond(false, 'Mailer Error: ' . $mail->ErrorInfo);
 // }

----------------------------------------------------------*/
