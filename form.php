<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $mailTo = 'maitrapraneel@gmail.com';

    $headers = "From: ".$email;
    $txt = $name." said: \n\n".$feedback;


    mail($mailTo , "Mail from text contact form", $text , $headers);
    header("Location: from.php?mailsend");
}


?>
 