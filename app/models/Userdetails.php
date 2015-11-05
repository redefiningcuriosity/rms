<?php 
use Phalcon\Mvc\Model;

class Userdetails extends Model
{
	public $u_id;

	public $u_fname;

	public $u_lname;

	public $u_email;

	public $u_pass;

	public $u_salt;

	public $u_reset;

	public $u_otp;

	public $u_phno;

	public function initialize()
	{
	
	}

	public function getSource()
	{
	return "userdetails";
	}

}
