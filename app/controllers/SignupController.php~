<?php

class SignupController extends ControllerBase
{

	public function initialize()
    	{
        	$this->tag->setTitle('Sign Up');
        	parent::initialize();
    	}

	public function indexAction()
	{
		function genUniqueReset ($length = 8)
		{
			  // given a string length, returns a random password of that length
		  $UniqueReset = "";
		  // define possible characters
		  $possible = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		  $i = 0;
		  // add random characters to $password until $length is reached
		  while ($i < $length) {
		    // pick a random character from the possible ones
		    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		    // we don't want this character if it's already in the password
		    if (!strstr($UniqueReset, $char)) {
		      $UniqueReset .= $char;
		      $i++;
		    }
		  }
		  return $UniqueReset;
		};

		if($this->request->isPost())
		{
			$fname=$this->request->getPost('fname');
			$lname=$this->request->getPost('lname');
			$email=$this->request->getPost('email');
			$phno=$this->request->getPost('phno');
			$pass=$this->request->getPost('pass');
			$cpass=$this->request->getPost('cpass');
			
			echo $fname.$lname.$email.$phno.$pass.$cpass;
			if (pass == cpass)
			{
				$salt=genUniqueReset(16);
				$password=sha1($pass.$salt);
				$user=new Userdetails();
				$user->u_fname=$fname;
				$user->u_lname=$lname;
				$user->u_email=$email;
				$user->u_pass=$password;
				$user->u_salt=$salt;
				$user->u_phno=$phno;

				if ($user->save()==0) {
					foreach ($user->getMessages() as $message) {
		          		  echo $message;
		     			}
				}
			}
			//return $this->response->redirect('signup');
		}
	}
	
	public function adduserAction()
	{
		function genUniqueReset ($length = 8)
		{
			  // given a string length, returns a random password of that length
		  $UniqueReset = "";
		  // define possible characters
		  $possible = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		  $i = 0;
		  // add random characters to $password until $length is reached
		  while ($i < $length) {
		    // pick a random character from the possible ones
		    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		    // we don't want this character if it's already in the password
		    if (!strstr($UniqueReset, $char)) {
		      $UniqueReset .= $char;
		      $i++;
		    }
		  }
		  return $UniqueReset;
		};

		if($this->request->isPost())
		{
			$fname=$this->request->getPost('fname');
			$lname=$this->request->getPost('lname');
			$email=$this->request->getPost('email');
			$phno=$this->request->getPost('phno');
			$pass=$this->request->getPost('pass');
			$cpass=$this->request->getPost('cpass');
			
			
			if ($pass == $cpass)
			{
				$salt=genUniqueReset(10);
				$password=sha1($pass.$salt);
				//echo $fname.$lname.$email.$phno.$pass.$cpass.$salt.$password;
				$user=new Userdetails();
				$user->u_fname=$fname;
				$user->u_lname=$lname;
				$user->u_email=$email;
				$user->u_pass=$password;
				$user->u_salt=$salt;
				$user->u_phno=$phno;

				if ($user->save()==0) {
					foreach ($user->getMessages() as $message) {
		          		  echo $message;
		     			}
				}
			}
			//return $this->response->redirect('signup');
		}
	
	}
}
?>
