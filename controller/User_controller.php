<?php

class User_controller extends BaseController
{
    private $em;
    private $rain;
    
    public function __construct() {
        $this->em = parent::$entityManager;
        $this->rain = parent::$tpl;
        
    }
    public function indexAction()
    {
        $em = parent::$entityManager;
        $listUsers = $em->getRepository("Model\User")->findAll();
       $this->rain->assign("users",$listUsers);
       $this->rain->draw("User/index");
    }
    
    public function subscribeAction()
    {
        //TODO
    }
    
    public function loginAction()
    {
        
    }
    
    public function logoutAction()
    {
        $login = $_POST["login"];
        $password = $_POST["password"];
        
        
    }
}
?>
