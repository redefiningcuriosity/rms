<?php

class AdminController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Admin');
	$this->view->setTemplateAfter('topbar');
	$auth = $this->session->get('auth');
	if($auth[cid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Admin";
	}
        parent::initialize();
    }

    public function indexAction()
    {
	$auth = $this->session->get('auth');
        $this->view->name = $auth[name];
    }

}
?>
