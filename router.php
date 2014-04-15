<?php
use Rain\Tpl;
class Router
{
    private $url;
    private $controller_name;
    private $command;
    private $arg;
    
    function __construct()
    {
        $this->arg = array();
        $this->url = explode('/', $_SERVER['REQUEST_URI']);
        if(isset($this->url[1]))
            $this->controller_name = $this->url[1];
        else
            $this->controller_name = "Home";
        
        if(!empty($this->url[2]))
            $this->command = $this->url[2];
        else
            $this->command = "index";
        
        for($i = 2; $i < sizeof($this->url);$i++)
        {
            array_push($this->arg, $this->url[$i]);
        }
    }
    
    public function callController()
    {
        $controllerName = $this->controller_name."_controller";
        $command = $this->command."Action";
        if($this->loadFiles() == 1)
        {
            $controller = new $controllerName;
            if(!isset($command))
                $command = "index";
            
            $controller->$command();
        }
    }
    
    private function loadFiles()
    {
        include("./controller/".$this->controller_name."_controller.php");
        /*
        if(file_exists("/controller/".$this->controller_name."_controller.php"))
        {
            include("/controller/".$this->controller_name."_controller.php");
            echo "coucou";
            return 1;
        }*/
        return 1;
    }
}
?>
