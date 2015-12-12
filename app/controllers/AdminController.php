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
	$date=date('Y-m-d');
	echo $date;
	$orders = Orders::find("o_delivery = 0");
	$nosorders = count($orders);

	$contact = Contact::find("co_status = 0");
	$noscontact = count($contact);

	$users = Userdetails::find();
	$nosusers = count($users);

	$result= Orders::sum(array(
			'column' => 'o_price',
			"conditions" => "o_date = :date:",
			"bind"       => array("date" => $date)
			));
	/*$phql="SELECT SUM(o_price) AS costs FROM Orders where o_date='2015-12-11'";
	$result = $this->modelsManager->executeQuery($phql);*/

	$this->view->nosorders=$nosorders;
	$this->view->noscontact=$noscontact;
	$this->view->nosusers=$nosusers;
	$this->view->nossale=$result;
    }

}
?>
