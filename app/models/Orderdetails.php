<?php 
use Phalcon\Mvc\Model;

class Orderdetails extends Model
{
	
	public $o_id;
	
	public $od_id;
	
	public $m_id;
	
	public $od_quantity;
	
	public $od_prepared;

	

	

	public function initialize()
	{
	
	}

	public function getSource()
	{
	return "orderdetails";
	}

}
