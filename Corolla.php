<?php
spl_autoload_register(function($class){
   
   $filename =  $class . '.php';
   if(file_exists($filename)){
       include $filename;
   }
  });
  //наследование
  class Corolla extends Toyota{
      protected $engine;
      const MODEL = 'Corolla';
      const WHITE = 'Белый перламутр';
      const BLACK = 'Графитовый черный с Gf эффектом';
      const BLUE = 'Глубокий синий перламутр';
      public function __construct($model, $color, $year, $serial_num)
      {
        $this->engine = new Engine1ZR(); //ассоциация (композиция)
        parent::__construct($model, $color, $year, $serial_num);
      }
    public function getEngineInfo(){
        $this->engine->getEngineInfo();
    }
    public function start(){
        echo Corolla::BRAND . ' ' . Corolla::MODEL . ': ';
        $this->engine->startEngine();
    }
    public function stop(){
        echo Corolla::BRAND . ' ' . Corolla::MODEL . ': ';
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