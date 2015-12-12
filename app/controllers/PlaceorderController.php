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
		$this->view->conname = "";
	}
        parent::initialize();
    }

    public function indexAction()
    {
	$vegmenudetails=Menudetails::find(
		    array(
			"m_category = 'Veg'",
			"order" => "m_type,m_subtype"
		    )
			);
	$this->view->vegmenu=$vegmenudetails;
	
	$nvegmenudetails=Menudetails::find(
		    array(
			"m_category = 'NonVeg'",
			"order" => "m_type,m_subtype"
		    )
			);
	$this->view->nvegmenu=$nvegmenudetails;
    }

    public function reviewAction()
    {
	if($this->request->isPost())	
	{
		$i=0;
		$item=$this->request->getPost('item');
		$orderarray=array();
		$order=array();
		foreach($item as $value)
		{
			$var='quantity'.$value;
			//echo $value;
			$quant=$this->request->getPost($var);
			//echo $quant;
			$result=Menudetails::findFirst(array(
               		 "(m_id = :mid:)",
                'bind' => array('mid' => $value)
            ));
			
				$order[m_id]=$result->m_id;
				$order[m_name]=$result->m_name;
				$order[m_price]=$result->m_price;
				$order[m_type]=$result->m_type;
				$order[m_subtype]=$result->m_subtype;
				$order[m_category]=$result->m_category;
				$order[quant]=$quant;
				array_push($orderarray,$order);
		}
		$this->view->orderarray=$orderarray;
		//$this->view->orderarray=json_encode($orderarray);
		//echo $orderarray->quant;
		print_r($orderarray);
	}
    }

    public function paymentAction()
    {
	if ($this->request->isPost()) {
		$orderarray = $this->request->getPost('orderarray');
		$orderarray = json_decode($orderarray,TRUE);

		$sum=0;
		foreach($orderarray as $veg)
		{
			$sum+=$veg[m_price]*$veg[quant];
		}
		//echo $sum;
		$auth = $this->session->get('auth');
		$id=$auth[uid];
		$orders= new Orders();
		$orders->u_id=$id;
		$orders->o_price=$sum;
		$orders->o_date=date("Y-m-d");
		$orders->o_payment="Failed";
		$orders->o_delivery=0;

		if ($orders->save() == false) {
		        foreach ($orders->getMessages() as $message) {
		            echo $message;
		        }
		 }
		else
		{
			foreach($orderarray as $veg)
			{
				$orderdetails=new Orderdetails();
				$orderdetails->o_id=$orders->o_id;
				$orderdetails->m_id=$veg[m_id];
				$orderdetails->od_quantity=$veg[quant];
				$orderdetails->od_prepared=0;
				if ($orderdetails->save() == false) {
		        		foreach ($orderdetails->getMessages() as $message) {
		            		echo $message;
		        		}
		 		}
				else
				{
					$user = Userdetails::findFirst(array(
               					 "(u_id = :id:)",
               					 'bind' => array('id' => $id)
            					));
					if($user!=false)
					{
						$datename=$user->u_fname;
						$dataemail=$user->u_email;
						$dataphone=$user->u_phno;
						$dataamount=$sum;
						$url="https://www.instamojo.com/slickaccount/test-for-integration-monthly-payment/?intent=buy&data_name=".$dataname."&data_email=".$dataemail."&data_phone=".$dataphone."&data_amount=".$dataamount."&data_readonly=data_phone&data_readonly=data_name&data_readonly=data_email";
						header('Location: '.$url);
					}
				}
			}
		}
	}
    }
}

