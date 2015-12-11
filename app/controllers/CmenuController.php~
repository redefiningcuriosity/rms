<?php

class CmenuController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Menu');
	$this->view->setTemplateAfter('sidebar');
	$auth = $this->session->get('auth');
	if($auth[uid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Cmenu";
	}
        parent::initialize();
    }

    public function indexAction()
    {
	$vegmenudetails=Menudetails::find(
		    array(
			"m_category = 'Veg'",
			"order" => "m_type,m_subtype"
		    )
			);
	$this->view->vegmenu=$vegmenudetails;
	
	$nvegmenudetails=Menudetails::find(
		    array(
			"m_category = 'NonVeg'",
			"order" => "m_type,m_subtype"
		    )
			);
	$this->view->nvegmenu=$nvegmenudetails;
    }
}
?>
