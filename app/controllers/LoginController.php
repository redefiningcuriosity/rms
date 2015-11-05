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
	echo "You are logged in!";
    }


}

