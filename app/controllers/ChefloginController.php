<?php

class ChefloginController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Admin');
        parent::initialize();
    }

    public function indexAction()
    {
    }

    private function _registerSession(Chefdetails $user)
    {
//auth is an array.. present in session variable for storing id and email.. can easily be hacked so pass is not stored
        $this->session->set('auth',array(
            'cid' => $user->c_id,
	    'name'=> $user->c_fname,
            'email' => $user->c_email,
        ));

	
    }

    public function startAction()
    {
	//$this->view->setRenderLevel(View::LEVEL_NO_RENDER);
	if ($this->request->isPost()) {

            $email = mb_strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('pass');
            $user = Chefdetails::findFirst(array(
                "(c_email = :email:)",
                'bind' => array('email' => $email)
            ));

	    if($user != false){
		    $user2 = Chefdetails::findFirst(array(
		        "(c_email = :email: AND c_pass = :password:)",
		        'bind' => array('email' => $email, 'password' => sha1("$password"."$user->c_salt"))
		    ));
	    
		    if ($user2 != false) {
		        $this->_registerSession($user2);  // session variable
		       return $this->response->redirect('admin');

		    }
	    }

            $this->flash->error('<span class="glyphicon glyphicon-info-sign"></span> Wrong Email - Password Combination');
        }

        return $this->response->redirect('cheflogin');
    }

	
}
?>
