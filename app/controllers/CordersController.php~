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
	$vegmenudetails=Orders::find();
	/*$o=new Order();
	$o->o_id=1;
	$o->u_id=2;
	$o->o_price=10;
	$o->o_date="2015-12-10";
	$o->o_transaction=1234;
	$o->o_payment="visa";
	$o->o_delivery=0;
	$o->save();*/

	/*$phql="SELECT * from Orders";
	$h=$this->modelsManager->executeQuery($phql,array());*/
    }

}
?>
