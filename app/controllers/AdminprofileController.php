<?php

class AdminprofileController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Profile');
	$this->view->setTemplateAfter('topbar');
	$auth = $this->session->get('auth');
	if($auth[cid]==false)
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
	$uid=$auth[cid];

	$user = Chefdetails::findFirst(array(
                "(c_id = :id:)",
                'bind' => array('id' => $uid)
            ));

	$this->view->user=$user;
    }

    public function updateAction()
    {
	$auth = $this->session->get('auth');
	$uid=$auth[cid];

	$user = Chefdetails::findFirst(array(
                "(c_id = :id:)",
                'bind' => array('id' => $uid)
            ));

	if ($this->request->isPost()) {

            $email = mb_strtolower($this->request->getPost('email'));
	    $fname = $this->request->getPost('fname');
	    $lname = $this->request->getPost('lname');
	    $phno = $this->request->getPost('phno');

	    if($user->c_email==$email)
	    {
		$user->c_fname=$fname;
		$user->c_lname=$lname;
		$user->c_phno=$phno;
	        $user->save();
		$this->flash->success('<span class="glyphicon glyphicon-info-sign"></span>  Details Successfully Updated');
	    }
	    else
	    {
		$this->flash->error('<span class="glyphicon glyphicon-info-sign"></span>  Wrong email address');
	    }

	    $this->response->redirect('adminprofile');
	}
    }

}
?>
