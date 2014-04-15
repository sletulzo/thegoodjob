<?php

class Home_controller extends BaseController
{
    
    public function indexAction()
    {
        parent::$tpl->assign("title","hello");
        parent::$tpl->draw("Annonces/index");
    }
    
    public function subscribeAction()
    {
        
    }
}
?>
