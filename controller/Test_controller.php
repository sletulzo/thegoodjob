<?php

class Test_controller extends BaseController
{
    
    public function indexAction()
    {
        parent::$tpl->assign("title","hello");
        parent::$tpl->draw("test_index");
    }
    
    public function testAction()
    {
        $em = parent::$entityManager;
        $users = $em->getRepository("Model\User")->findAll();
        var_dump($users);
    }
}
?>
