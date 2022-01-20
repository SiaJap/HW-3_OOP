<?php
spl_autoload_register(function($class){
   
    $filename =  $class . '.php';
    if(file_exists($filename)){
        include $filename;
    }
   });

class EngineV6 extends Engine{
    protected $series = '2GR-FE V6';
    protected $max_speed = 220;
}
?>