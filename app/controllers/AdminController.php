<?php

class AdminController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Admin');
	$this->view->setTemplateAfter('topbar');
	//$this->view->setTemplateAfter('sidebar');
	if($this->session->get('auth')==false)
		$this->response->redirect('404');
        parent::initialize();
    }

    public function indexAction()
    {
	$auth = $this->session->get('auth');
        $this->view->name = $auth[name];
    }

}
?>
