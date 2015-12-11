<?php

use Phalcon\Mvc\Controller;

class LogoutController extends Controller
{

    public function indexAction()
    {
        //Destroy the whole session
	$this->session->remove('auth');
        $this->session->destroy();
	return $this->response->redirect('index');
    }

}

