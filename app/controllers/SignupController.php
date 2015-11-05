<?php

class SignupController extends ControllerBase
{

	public function initialize()
    	{
        	$this->tag->setTitle('Sign Up');
        	parent::initialize();
    	}

	//Displays basic page and Signups a user.
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

		//If the form is posted to this action then it runs.
		if($this->request->isPost())
		{
			//Get all posted values from form.
			$fname=$this->request->getPost('fname');
			$lname=$this->request->getPost('lname');
			$email=$this->request->getPost('email');
			$phno=$this->request->getPost('phno');
			$pass=$this->request->getPost('pass');
			$cpass=$this->request->getPost('cpass');
			
			//check if a user exists with this email address.
			
			$user = Userdetails::findFirst(array(
              		  "(u_email = :email:)",
                	  'bind' => array('email' => $email)
           		 ));

			if($user==false)
			{
				//check if passwords and confirm passwords match.
				if ($pass == $cpass)
				{
					//Set salt and generate password combining user password and salt.
					$salt=genUniqueReset(16);
					$password=sha1($pass.$salt);

					//Create row in database by invoking corresponding Model Class. Set all required coloumn values accordingly.
					$user=new Userdetails();
					$user->u_fname=$fname;
					$user->u_lname=$lname;
					$user->u_email=$email;
					$user->u_pass=$password;
					$user->u_salt=$salt;
					$user->u_phno=$phno;
					$user->u_reset=genUniqueReset(50);
					//Save the row in the database.
					if ($user->save()==0) {
						foreach ($user->getMessages() as $message) {
				  		  echo $message;
			     			}
					}
					else
					{
						//user successfully registered. Send confirmation email and ask him to login.
						$msg=array ("html" => "Hi ".$fname.",</br>Welcome To Resturant. Please confirm your email by clicking on this link: </br> <a href='http://localhost/rms/signup/confirm/".$user->u_id."/".$user->u_reset."'>Continue</a><br> Else please copy paste this link on your browser's URL bar: <br> <a href='http://localhost/rms/signup/confirm/".$user->u_id."/".$user->u_reset."'>http://localhost/rms/signup/confirm/".$user->u_id."/".$user->u_reset."</a><br>  Thank you.",
							"subject" =>"Resturant:Confirmation email",
							"toemail" => $email,
							"fromemail" =>"noreply@chiragresturant.com",
							"fromname" =>"Chirag Resturant",
							"trackopen" => true );
						//echo "hello";
						$mandrill = new MandrillController();
						$mandrill->sendAction($msg);
						//echo "chillo";
					}
				}
				else
				{
					//show error that passwords do not match
				}
			}
			else
			{
				//show error that email id is already registered.
			}
		}
	}

	//user confirms email address by clicking on the link in his email address 
	public function confirmAction($uid,$u_reset)
	{
		if($uid == NULL || $u_reset==NULL)
		{
			return $this->response->redirect("404");
		}

		$user = Userdetails::findFirst(array(
              		  "(u_id = :id:)",
                	  'bind' => array('id' => $uid)
           		 ));
		if($user->u_reset==$u_reset)
		{
			//update user as active.
			$user->u_reset=NULL;
			$user->u_active=1;
			$user->save();
		}
	}
}
?>
