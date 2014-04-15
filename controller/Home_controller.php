<?php
use Rain\Tpl;
class Home_controller extends BaseController
{
    
    public function indexAction()
    {
        parent::$tpl->assign("title","hello");
        parent::$tpl->draw("Home/index");
    }
    
    public function subscribeAction()
    {
        
    }
}
?>
