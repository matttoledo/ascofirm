<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$message = addslashes($_POST['message']);

$to = "ascofirm@ascofirm.com";
$subject = "Contato ASCONFIRM";
$body = "Name: ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Phone: ".$phone. "\r\n".
        "Message: ".$message;

$header = "From:daniel@ascofirm.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado!!");
}else{
    echo("Tente novamente!");
}
 
}

?>