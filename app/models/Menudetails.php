<?php 
use Phalcon\Mvc\Model;

class Menudetails extends Model
{
	public $m_id;

	public $m_name;

	public $m_type;

	public $m_subtype;

	public $m_category;

	public $m_price;


	public function initialize()
	{
	
	}

	public function getSource()
	{
	return "menudetails";
	}

}
