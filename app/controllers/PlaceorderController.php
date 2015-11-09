<?php

class PlaceorderController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('PlaceOrder');
	$this->view->setTemplateAfter('sidebar');
	$auth = $this->session->get('auth');
	if($auth==false)
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
	
    }

}

