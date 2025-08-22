<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

function clean($v) {
    return trim($v ?? '');
}

$name    = clean($_POST['name'] ?? '');
$email   = clean($_POST['email'] ?? '');
$phone   = clean($_POST['phone'] ?? '');
$subject = clean($_POST['subject'] ?? '') ?: 'New Enquiry';
$message = clean($_POST['message'] ?? '');

$to = 'info@tech-centrics.com';
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Website <no-reply@tech-centrics.com>\r\n";
$headers .= "Reply-To: " . addslashes($name) . " <{$email}>\r\n";

$body = "<h3>New Website Enquiry</h3>"
      . "<p><b>Name:</b> " . htmlspecialchars($name) . "</p>"
      . "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>"
      . "<p><b>Phone:</b> " . htmlspecialchars($phone) . "</p>"
      . "<p><b>Subject:</b> " . htmlspecialchars($subject) . "</p>"
      . "<p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>";

@mail($to, $subject, $body, $headers);

echo '<script>alert("Enquiry successful"); window.history.back();</script>';
?>
