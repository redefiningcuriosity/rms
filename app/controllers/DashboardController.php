<?php

class DashboardController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Dashboard');
	$this->view->setTemplateAfter('sidebar');
	$auth = $this->session->get('auth');
	if($auth[uid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Dashboard";
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
