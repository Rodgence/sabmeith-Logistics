<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $service = htmlspecialchars($_POST['service']);
    $note = htmlspecialchars($_POST['note']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration for cPanel
        $mail->isSMTP();
        $mail->Host = 'mail.rodline.co.tz'; // Replace with your cPanel SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rodline.co.tz'; // Your cPanel email
        $mail->Password = '@200r320KK'; // Your cPanel email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Try TLS first, or use PHPMailer::ENCRYPTION_SMTPS for SSL
        $mail->Port = 465; // Common SMTP port (use 465 for SSL)

        // Email Settings
        $mail->setFrom('info@rodline.co.tz', 'RodLine');
        $mail->addAddress('rodgencekagaba@yahoo.com', 'Sales Agent'); // Change to your recipient

        $mail->isHTML(true);
        $mail->Subject = "New Service Inquiry";
        $mail->Body = "
            <h2>Service Inquiry Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mobile:</strong> $mobile</p>
            <p><strong>Service:</strong> $service</p>
            <p><strong>Special Note:</strong> $note</p>
        ";

        $mail->send();
        echo "<script>alert('Your inquiry has been sent successfully.'); window.location.href='index.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>
