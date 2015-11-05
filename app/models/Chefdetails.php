<?php 
use Phalcon\Mvc\Model;

class Chefdetails extends Model
{
	public $c_id;

	public $c_fname;

	public $c_lname;

	public $c_email;

	public $c_pass;

	public $c_salt;

	public $c_reset;

	public function initialize()
	{
	
	}

	public function getSource()
	{
	return "chefdetails";
	}

}
