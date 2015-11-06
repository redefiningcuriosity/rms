<?php

class ForgotpasswordController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Forgot password');
        parent::initialize();
    }

    public function indexAction()
    {
	//Function to generate a random string to be used as salt.
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
		//Get all posted values from form.
		$email=$this->request->getPost('email');
		
		$user = Userdetails::findFirst(array(
              		  "(u_email = :email:)",
                	  'bind' => array('email' => $email)
           		 ));

		if($user==false)
		{
		}
		else
		{
			$user->u_reset=genUniqueReset(50);
			$user->save();
			$msg=array ("html" => "Hi ".$user->u_fname.",</br>Please click here to reset your password: </br> <a href='http://localhost/rms/forgotpassword/set/".$user->u_id."/".$user->u_reset."'>Continue</a><br> Else please copy paste this link on your browser's URL bar: <br> <a href='http://localhost/rms/forgotpassword/set/".$user->u_id."/".$user->u_reset."'>http://localhost/rms/signup/confirm/".$user->u_id."/".$user->u_reset."</a><br>  Thank you.",
					"subject" =>"Resturant:Forgot Password email",
					"toemail" => $email,
					"fromemail" =>"noreply@resturant.com",
					"fromname" =>"Resturant",
					"trackopen" => true );
					$mandrill = new MandrillController();
					$mandrill->sendAction($msg);
		}
		return $this->response->redirect("login");
	}
	
    }

	public function setAction($uid,$u_reset)
    	{
		$user = Userdetails::findFirst(array(
              		  "(u_id = :id:)",
                	  'bind' => array('id' => $uid)
           		 ));
		if($user==false)
		{
		}
		else
		{
			$this->view->ur1=$u_reset;
			$this->view->ur2=$user->u_reset;
			$this->view->email=$user->u_email;
		}
    	}

	public function updateAction()
    	{
		if($this->request->isPost())
		{
			//Get all posted values from form.
			$email=$this->request->getPost('email');
			$reset=$this->request->getPost('reset');
			$newpass=$this->request->getPost('newpass');
			$cpass=$this->request->getPost('cpass');

			$user = Userdetails::findFirst(array(
              		  "(u_email = :id: AND u_reset=:reset:)",
                	  'bind' => array('id' => $email, 'reset'=>$reset)
           		 ));
		
			if($user!=false)
			{
				if($newpass==$cpass)
				{
					$user->u_pass=sha1($newpass.$user->u_salt);
					$user->save();
					return $this->response->redirect("login");
				}
				echo "Wrong password";
			}
			else
			{
				echo "Chutiya banaega?";
			}
		}
				
	}
}
?>
