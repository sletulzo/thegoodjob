<?php
class Session{
    
    public static function init()
    {
        session_start();
    }
    
    public static function isConnected(){
        if(isset($_SESSION)){
            if(array_key_exists('connected', $_SESSION))
                return $_SESSION["connected"];
            else
                return false;            
        }
    }

    public static function disconnect(){
        session_destroy();
    }
    
    public static function prepareSession() {
        $_SESSION["connected"] = true;
    }
}
?>