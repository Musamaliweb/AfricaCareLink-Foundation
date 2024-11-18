

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "africacarelinkfoundation@gmail.org"; // Your email address
    $subject = "New Inquiry from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for your inquiry. We will get back to you shortly.";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
}

?>