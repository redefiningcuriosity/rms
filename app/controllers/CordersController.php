<?php

class CordersController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Past Orders');
	$this->view->setTemplateAfter('sidebar');
	$auth = $this->session->get('auth');
	if($auth[uid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Orders";
	}
        parent::initialize();
    }

 public function indexAction()
    {
	$auth = $this->session->get('auth');
	$id=$auth[uid];
	$orders=Orders::find(array(
			"conditions" => "u_id = :uid:",
			"bind" => array("uid" => $id),
			"order" => "o_id DESC"
			));
	$this->view->orders=$orders;
    }

}
?>
