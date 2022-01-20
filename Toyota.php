<?php
spl_autoload_register(function($class){
   
    $filename =  $class . '.php';
    if(file_exists($filename)){
        include $filename;
    }
   });
//абстракция
 abstract class Toyota implements MovableInterface{
    const BRAND = 'Toyota';
    public function __construct($model, $color, $year, $serial_num)
    {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
        $this->serial_num = $serial_num;
    }
    public function start(){}

    public function stop(){}
  
    public function up(){}

    public function down(){}

    public function getInfo(){
        echo PHP_EOL . 'Марка машины: ' . Toyota::BRAND . PHP_EOL .
        'Модель машины: ' . $this->model . PHP_EOL .
        'Цвет машины: ' . $this->color . PHP_EOL .
        'Год производства: ' . $this->year . PHP_EOL .
        'Серийный номер: ' . $this->serial_num . PHP_EOL;
    }
}
?>