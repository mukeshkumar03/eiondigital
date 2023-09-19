<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['message'];

$to = "krmukesh.nit@gmail.com";
$subject = "Quote Request from $email";

$message = "
    <html>
        <body>
            <table>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td><strong>Message</strong></td>
                    <td>$comment</td>
                </tr>
            </table>
        </body>
    </html>
    ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo '1';
} else {
    echo '0';
}
?>