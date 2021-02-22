<?php

include "./global.php";
header('Content-Type: application/json');


$name = trim($_POST["Param_name"]);
$email = trim($_POST["Param_email"]);
$subject = trim($_POST["Param_subject"]);
$message = trim($_POST["Param_message"]);


$ok = 1;
$messageInfo = "<ul>";

/* controle de saisie */
if (empty($name)) {
    $ok = 0;
    $messageInfo .= "<li> $nameError</li>";
}

//checking email
if (empty($email)) {
    $ok = 0;
    $messageInfo .= "<li>$emailError</li>";
}else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messageInfo .= "<li>$emailWrong</li>";
        $ok = 0;
        $erreurEmail = 1;
    }
}
//checking message
if (empty($message)) {
    $message = $emptyMessageError;
}
//checking phone number
if (empty($subject)) {
    $ok = 0;
    $messageInfo .= "<li>$subjectError</li>";
}
//acting if everything okay
if ($ok) {
    $myemail = $my_email;
    $emailSubject = 'New contact from '.$domainName;
    $emailMessage = "<strong>$name</strong> , <strong>$email</strong>  contacted you via $domainName <br>";
    $emailMessage .= "<strong>message : </strong>  $message  <br>";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: '.$domainName. "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // mail($myemail, $emailSubject, $emailMessage, $headers);
    $ok = 1 ;
}
$messageInfo .= "</ul>";
$data = array("succes" => $ok,
    "message" => $messageInfo);
echo json_encode($data);

?>
