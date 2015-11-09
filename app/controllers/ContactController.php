<?php

class ContactController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Contact Us');
	$this->view->setTemplateAfter('sidebar');
	$auth = $this->session->get('auth');
	if($auth==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Contact";
	}
        parent::initialize();
    }

    public function indexAction()
    {
	if($this->request->isPost())	
	{
		$auth = $this->session->get('auth');
		$id=$auth['id'];
		$reason=$this->request->getPost('reason');
		$email=$this->request->getPost('email');
		$message=$this->request->getPost('message');
	
		$contact=new Contact();
		$contact->u_id=$id;
		$contact->co_email=$email;
		$contact->co_message=$message;
		$contact->co_reason=$reason;
		if ($contact->save() == false) {
		        foreach ($contact->getMessages() as $message) {
		            echo $message;
		        }
		 }
		$this->flash->notice('<span class="glyphicon glyphicon-flag"></span> We will get back to your email in 24-48 hours.');
		//return $this->response->redirect('contact');
	}
    }

}
?>
