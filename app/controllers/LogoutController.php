<?php

use Phalcon\Mvc\Controller;

class LogoutController extends Controller
{

    public function indexAction()
    {
        //Destroy the whole session
	$this->session->remove('auth');
        $this->session->destroy();
	echo "Marigala Session";
	$auth = $this->session->get('auth');
        $name = $auth[name];
	echo $name;
	return $this->forward('index');
    }

}

