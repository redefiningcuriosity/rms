<?php

class MenuController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Menu');
	$this->view->setTemplateAfter('topbar');
	$auth = $this->session->get('auth');
	if($auth[cid]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
		$this->view->conname = "Menu";
	}
        parent::initialize();
    }

    public function indexAction()
    {
	
	if($this->request->isPost())	
	{
		$mname=$this->request->getPost('name');
		$mprice=$this->request->getPost('price');
		$mtype=$this->request->getPost('type');
		$mstype=$this->request->getPost('stype');
		$category=$this->request->getPost('category');
		
		$menu = new Menudetails();
		$menu->m_name=$mname;
		$menu->m_price=$mprice;
		$menu->m_type=$mtype;
		$menu->m_subtype=$mstype;
		$menu->m_category=$category;
		if ($menu->save() == false) {
		        foreach ($menu->getMessages() as $message) {
		            echo $message;
		        }
		 }
		return $this->response->redirect('menu');
	}
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

    public function deleteAction($mid)
    {
	$auth = $this->session->get('auth');
	$cid=$auth[cid];
	if($cid==false)
		$this->response->redirect("404");
	else
	{
		$menu = Menudetails::findFirst(array(
		        "(m_id = :mid:)",
		        'bind' => array('mid' => $mid)
		    ));

		if ($menu != false) {
			$menu->delete();
			return $this->response->redirect('menu');
			}
	}
    }

    public function editAction($mid)
    {
	$auth = $this->session->get('auth');
	$cid=$auth[cid];
	//echo $cid;
	if($cid==false)
		$this->response->redirect("404");
	else
	{
		$menu = Menudetails::findFirst(array(
		        "(m_id = :mid:)",
		        'bind' => array('mid' => $mid)
		    ));

		$this->view->menu=$menu;
	}
    }
    
    public function addAction()
    {
    }
    public function updateAction()
    {
	if($this->request->isPost())	
	{
		$mid=$this->request->getPost('mid');
		$mname=$this->request->getPost('name');
		$mprice=$this->request->getPost('price');
		$mtype=$this->request->getPost('type');
		$mstype=$this->request->getPost('stype');
		$category=$this->request->getPost('category');
		
		$menu = new Menudetails();
		$menu->m_id=$mid;
		$menu->m_name=$mname;
		$menu->m_price=$mprice;
		$menu->m_type=$mtype;
		$menu->m_subtype=$mstype;
		$menu->m_category=$category;
		if ($menu->save() == false) {
		        foreach ($menu->getMessages() as $message) {
		            echo $message;
		        }
		 }
		return $this->response->redirect('menu');
	}
    }	

}
?>
