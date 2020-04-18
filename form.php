<?php
if(isset($_POST["Message"])) {
 
    $email_to = "rinkuce@gmail.com";
 
    $Name = $_POST["Name"]; // required
    $email_from = $_POST["e-mail"]; // required
    $Message = $_POST["Message"]; // required
    $email_subject = $_POST["Subject"];
 
    $email_message .= "Name: ".$Name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Subject: ".$email_subject."\n";
    $email_message .= "Message: ".$Message."\n";
 
// create email headers
$headers = "From: ".$email_from."\r\n".
"Reply-To: ".$email_from."\r\n" .
mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<?php

header("Location: http://www.sumomtaz.info/contact-thanks.html");
exit; 
 
}
?>