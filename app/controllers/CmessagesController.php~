<?php

class CmessagesController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Messages');
	$this->view->setTemplateAfter('topbar');
	$auth = $this->session->get('auth');
	if($auth[cid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Messages";
	}
        parent::initialize();
    }

    public function indexAction()
    {
	$umsg=Contact::find(
		    array(
			"co_status = 0"
		    )
			);
	$this->view->umsg=$umsg;
	$rmsg=Contact::find(
		    array(
			"co_status = 1"
		    )
			);
	$this->view->rmsg=$rmsg;
    }

    public function viewAction($co_id)
    {
	$co=Contact::findFirst("co_id = '$co_id'");
	$name1=Userdetails::findFirst("u_id = '$co->u_id'");
	$this->view->name1=$name1;
	$this->view->q=$co;
	
    }

    public function replyAction($co_id)
    {
	$co=Contact::findFirst("co_id = '$co_id'");
	$name1=Userdetails::findFirst("u_id = '$co->u_id'");
	$this->view->name1=$name1;
	$this->view->q=$co;
	$this->view->coid=$co_id;
    }

    public function submitreplyAction()
    {
	if($this->request->isPost())
	{
		$replymessage=$this->request->getPost('replymessage');
		$message=$this->request->getPost('message');
		$email=$this->request->getPost('email');
		$name=$this->request->getPost('name');
		$reason=$this->request->getPost('reason');
		$coid=$this->request->getPost('coaid');

		$msg=array ("html" => "Hello ".$name.",</br>This is in response to your ".$reason." on our Resturant. </br> <br> <br>Your Message: <i>".$message."</i><br><br>".$replymessage."<br>  Thank you. <br> Please write back to us if you have further queries. We will be happy to help. <br> <br> If you are recieving this message by mistake, please ignore.",
					"subject" =>"Ticket: ".$coid." : Resturant Query",
					"toemail" => $email,
					"fromemail" =>"support@resturant.com",
					"fromname" =>"Resturant",
					"trackopen" => true );
					$mandrill = new MandrillController();
					$mandrill->sendAction($msg);

		$con=Contact::findFirst("co_id = '$coid'");
		$con->co_status=1;
		$con->save();

		$this->response->redirect('cmessages');
		
	}
    }
}
?>
