<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok'=>false,'error'=>'Method Not Allowed']); exit;
}

if (!empty($_POST['website'])) { // honeypot
  http_response_code(400);
  echo json_encode(['ok'=>false,'error'=>'Bad Request']); exit;
}

function clean($v){ return trim($v ?? ''); }

$name    = clean($_POST['name']);
$email   = clean($_POST['email']);
$phone   = clean($_POST['phone']);
$subject = clean($_POST['subject']) ?: 'New Enquiry';
$message = clean($_POST['message']);

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  echo json_encode(['ok'=>false,'error'=>'Fill name, valid email, and message']); exit;
}

$to = 'info@tech-centrics.com';
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Website <no-reply@yourdomain.com>\r\n";
$headers .= "Reply-To: ".addslashes($name)." <{$email}>\r\n";

$body = "<h3>New Website Enquiry</h3>"
      . "<p><b>Name:</b> ".htmlspecialchars($name)."</p>"
      . "<p><b>Email:</b> ".htmlspecialchars($email)."</p>"
      . "<p><b>Phone:</b> ".htmlspecialchars($phone)."</p>"
      . "<p><b>Subject:</b> ".htmlspecialchars($subject)."</p>"
      . "<p><b>Message:</b><br>".nl2br(htmlspecialchars($message))."</p>";

$sent = @mail($to, $subject, $body, $headers);

echo json_encode(['ok' => (bool)$sent]);
