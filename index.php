<?php
include("router.php");
include("loader.php");
include("lib/autoload.php");
include("lib/std/baseController.php");
include("model/User.php");

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Rain\Tpl;

Session::init();
$router = new Router();

//Doctrine
$paths = array("/model");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'testgoodjob',
    'password' => 'test',
    'dbname'   => 'goodjobtest',
);

  // load the entities
        $entityClassLoader = new \Doctrine\Common\ClassLoader('Entities', 'model');
        $entityClassLoader->register();

        // load the proxy entities
        $proxyClassLoader = new \Doctrine\Common\ClassLoader('Proxies', 'model');
        $proxyClassLoader->register();

        // set up the configuration 
        $config = new \Doctrine\ORM\Configuration;

        // set up proxy configuration
        $config->setProxyDir('model/Proxies');
        $config->setProxyNamespace('Proxies');
        
        // auto-generate proxy classes if we are in development mode
        $config->setAutoGenerateProxyClasses(1);
        
        $phpMetaData = $config->newDefaultAnnotationDriver($paths);
 //       $phpMetaData = Doctrine\ORM\Mapping\Driver\AnnotationDriver::create("model/");
        $config->setMetadataDriverImpl($phpMetaData);

        
$entityManager = EntityManager::create($dbParams, $config);
BaseController::$entityManager = $entityManager;
//RainTpl
$rainSetting = array(
    "tpl_dir" => "view/",
    "cache_dir" => "tmp/",
    "check_template_update" => true,
);
Tpl::configure($rainSetting,".tpl");
$tpl = new Tpl;
BaseController::$tpl = $tpl;
$router->callController();
?>
