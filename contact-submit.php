<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    /* ================= SMTP CONFIG ================= */
    $smtpHost = 'smtp.gmail.com';
    $smtpUser = 'shahbuddin312203@gmail.com';   // 🔴 ADMIN GMAIL
    $smtpPass = 'wgwbtiwbterfvick';              // 🔴 APP PASSWORD
    $smtpPort = 587;

    /* ================= ADMIN MAIL ================= */
    $adminMail = new PHPMailer(true);
    try {
        $adminMail->isSMTP();
        $adminMail->Host       = $smtpHost;
        $adminMail->SMTPAuth   = true;
        $adminMail->Username   = $smtpUser;
        $adminMail->Password   = $smtpPass;
        $adminMail->SMTPSecure = 'tls';
        $adminMail->Port       = $smtpPort;

        $adminMail->setFrom($smtpUser, 'YourMobileBuyer');
        $adminMail->addAddress('shahbuddin312203@gmail.com'); // 🔴 ADMIN RECEIVER

        $adminMail->isHTML(true);
        $adminMail->Subject = '📩 New Contact Form Submission';
        $adminMail->Body = "
            <h3>New Contact Request</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Subject:</b> $subject</p>
            <p><b>Message:</b><br>$message</p>
        ";

        $adminMail->send();
    } catch (Exception $e) {
        die("Admin Mail Error: {$adminMail->ErrorInfo}");
    }

    /* ================= USER AUTO-REPLY ================= */
    $userMail = new PHPMailer(true);
    try {
        $userMail->isSMTP();
        $userMail->Host       = $smtpHost;
        $userMail->SMTPAuth   = true;
        $userMail->Username   = $smtpUser;
        $userMail->Password   = $smtpPass;
        $userMail->SMTPSecure = 'tls';
        $userMail->Port       = $smtpPort;

        $userMail->setFrom($smtpUser, 'YourMobileBuyer');
        $userMail->addAddress($email); // 🔴 USER EMAIL

        $userMail->isHTML(true);
        $userMail->Subject = 'Thanks for contacting YourMobileBuyer';
        $userMail->Body = "
            Hi <b>$name</b>,<br><br>
            Thank you for contacting <b>YourMobileBuyer</b>.<br>
            We have received your message and our team will contact you shortly.<br><br>
            Regards,<br>
            <b>YourMobileBuyer Team</b>
        ";

        $userMail->send();
    } catch (Exception $e) {
        die("User Mail Error: {$userMail->ErrorInfo}");
    }

    echo "<script>alert('Message sent successfully');window.location='contact-us.php';</script>";
}
?>
