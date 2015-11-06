<?php

class LoginController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Login');
        parent::initialize();
    }

    public function indexAction()
    {
    }

    private function _registerSession(Userdetails $user)
    {
        $this->session->set('auth',array(
            'id' => $user->u_id,
            'email' => $user->u_email,
        ));

	
    }

    public function startAction()
    {
	//$this->view->setRenderLevel(View::LEVEL_NO_RENDER);
	if ($this->request->isPost()) {

            $email = mb_strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('password');
            $user = Userdetails::findFirst(array(
                "(u_email = :email:)",
                'bind' => array('email' => $email)
            ));

	    if($user != false){
		    $user2 = Userdetails::findFirst(array(
		        "(u_email = :email: AND u_pass = :password:)",
		        'bind' => array('email' => $email, 'password' => sha1("$password"."$user->u_salt"))
		    ));
	    
            if ($user2 != false) {
                $this->_registerSession($user2);
               return $this->response->redirect('welcome/index');

            }
	}

            $this->flash->error('Wrong email/password');
        }

        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

	
}
?>
