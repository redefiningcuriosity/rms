<?php 
use Phalcon\Mvc\Model;

class Contact extends Model
{
	public $co_id;

	public $u_id;

	public $co_email;

	public $co_reason;

	public $co_message;

	public function initialize()
	{
	
	}

	public function getSource()
	{
	return "contact";
	}

}
?>
