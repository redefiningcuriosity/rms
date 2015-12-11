<?php

class ProfileController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Profile');
	$this->view->setTemplateAfter('sidebar');
	$auth = $this->session->get('auth');
	if($auth[uid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];

	}
        parent::initialize();
    }

    public function indexAction()
    {
	$auth = $this->session->get('auth');
	$uid=$auth[uid];

	$user = Userdetails::findFirst(array(
                "(u_id = :id:)",
                'bind' => array('id' => $uid)
            ));

	$this->view->user=$user;
    }

    public function updateAction()
    {
	$auth = $this->session->get('auth');
	$uid=$auth[uid];

	$user = Userdetails::findFirst(array(
                "(u_id = :id:)",
                'bind' => array('id' => $uid)
            ));

	if ($this->request->isPost()) {

            $email = mb_strtolower($this->request->getPost('email'));
	    $fname = $this->request->getPost('fname');
	    $lname = $this->request->getPost('lname');
	    $phno = $this->request->getPost('phno');

	    if($user->u_email==$email)
	    {
		$user->u_fname=$fname;
		$user->u_lname=$lname;
		$user->u_phno=$phno;
	        $user->save();
		$this->flash->success('<span class="glyphicon glyphicon-info-sign"></span>  Details Successfully Updated');
	    }
	    else
	    {
		$this->flash->error('<span class="glyphicon glyphicon-info-sign"></span>  Wrong email address');
	    }

	    $this->response->redirect('profile');
	}
    }

}
?>
