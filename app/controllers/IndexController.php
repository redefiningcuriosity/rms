<?php

class IndexController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Welcome');
        parent::initialize();
    }

    public function indexAction()
    {
	$this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        $this->view->render("index", "index");
        $template = $this->view->getRender('index', 'index', null, function($view) {
            $view->setRenderLevel(Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
        });
        var_dump($template);
    }

}
?>
