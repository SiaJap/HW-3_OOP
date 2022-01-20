<?php
spl_autoload_register(function($class){
   
   $filename =  $class . '.php';
   if(file_exists($filename)){
       include $filename;
   }
  });
  //наследование
  class Camry extends Toyota{
      protected $engine;
      const MODEL = 'Camry';
      const WHITE = 'Белый неметаллик';
      const SILVER = 'Серебристый металлик';
      const RED = 'Красный металлик';
      public function __construct($model, $color, $year, $serial_num)
      {
        $this->engine = new EngineV6(); //ассоциация (композиция)
        parent::__construct($model, $color, $year, $serial_num);
      }
    public function getEngineInfo(){
        $this->engine->getEngineInfo();
    }
    public function start(){
        echo Camry::BRAND . ' ' . Camry::MODEL . ': ';
        $this->engine->startEngine();
    }
    public function stop(){
        echo Camry::BRAND . ' ' . Camry::MODEL . ': ';
        $this->engine->stopEngine();
    }
    public function up(){
        $this->engine->speedUp();       
  }
    public function down(){
        $this->engine->speedDown();       
}
}
  ?>