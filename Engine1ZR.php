<?php
spl_autoload_register(function($class){
   
    $filename =  $class . '.php';
    if(file_exists($filename)){
        include $filename;
    }
   });
   
class Engine1ZR extends Engine {
    protected $series = '1ZR-FE';
    protected $max_speed = 190;
    }

?>