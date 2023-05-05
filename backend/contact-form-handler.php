<?php
if(isset($_POST['submit'])){
    $to = "info@caffecentocinque.com"; //your email address
    $from = $_POST['email']; //sender email address
    $name = $_POST['name']; //sender name
    $subject = $_POST['subject']; //email subject
    $message = $name . " ha scritto il seguente messaggio:" . "\n\n" . $_POST['message']; //email message

    //headers
    $headers = "From:" . $from;

    //send email
    mail($to,$subject,$message,$headers);

    //redirect to thank you page
    header('Location: thank-you.html');
    exit();
}
?>
