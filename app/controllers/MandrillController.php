<?php

class MandrillController extends ControllerBase
{

    public function initialize()
    {
        require_once APP_PATH.$config->mandrill->mandrillDir.'Mandrill.php';
    }
    public function sendAction($msg)
    {
	$mandrill = new Mandrill('9yH3j06cpDYo4f0LEJ0QMg');
	$message = new stdClass();
	$message->html = $msg['html'];
	//$message->text = "text body";
	$message->subject = $msg['subject'];
	$message->from_email = $msg['fromemail'];
	$message->from_name  = $msg['fromname'];
	$message->to = array(array("email" => $msg['toemail']));
	$message->track_opens = $msg['trackopen'];
	$response = $mandrill->messages->send($message);
	//echo "Mandrill";
    }
}
?>
