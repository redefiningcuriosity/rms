<?php

class OrdersController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Orders');
	$this->view->setTemplateAfter('topbar');
	$auth = $this->session->get('auth');
	if($auth[cid]==false)
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
		
	$undeliveredorders=Orders::find(
		    array(
			"o_delivery = 0",
			"order" => "o_id"
		    )
			);
	$this->view->undelivered=$undeliveredorders;
	$deliveredorders=Orders::find(
		    array(
			"o_delivery = 1",
			"order" => "o_id"
		    )
			);
	$this->view->delivered=$deliveredorders;
    }

    public function updateAction($oid)
    {
	$auth = $this->session->get('auth');
	$cid=$auth[cid];

	if($cid==false)
		$this->response->redirect("404");
	else
	{
		$order = Orders::findFirst(array(
		        "(o_id = :oid:)",
		        'bind' => array('oid' => $oid)
		    ));
		$order->o_delivery=1;
		if ($order->save() != false) {
			return $this->response->redirect('orders');
			}
	}
    }

}
?>
