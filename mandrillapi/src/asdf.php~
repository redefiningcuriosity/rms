<?php
require_once 'Mandrill.php';
echo "hello";

$mandrill = new Mandrill($config->mandrill->apikey);

$message = new stdClass();
$message->html = "html message";
$message->text = "text body";
$message->subject = "email subject";
$message->from_email = "h230300@gmail.com";
$message->from_name  = "From Name";
$message->to = array(array("email" => "redefiningcuriosity@gmail.com"));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
?>
