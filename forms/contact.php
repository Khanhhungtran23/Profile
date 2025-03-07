<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $mailheader = "From: " . $name . " <" . $email . ">\r\n";
        $recipient = "tvkhhung03@gmail.com";

        if (mail($recipient, $subject, $message, $mailheader)) {
            echo "<p style='color: green;'>Email sent successfully!</p>";
        } else {
            echo "<p style='color: red;'>Failed to send email!</p>";
        }
    } else {
        echo "<p style='color: red;'>All fields are required!</p>";
    }
} else {
    echo "<p style='color: red;'>Invalid request!</p>";
}
?>
