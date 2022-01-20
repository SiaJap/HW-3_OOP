<?php
abstract class Engine{
    protected $name = 'Поршневой двигатель внутреннего сгорания';
    protected $type = 'Инжекторный';
    protected $series;
    protected $speed = 0;
    protected $max_speed;
    public function getEngineInfo(){
        echo 'Информация о двигателе: ' . $this->type . ' '. $this->name . ' серии ' . $this->series.PHP_EOL;
    }
    //инкапсуляция
    public function startEngine(){
        $this->start();
    }
    protected function start(){
        echo 'Двигатель заведен'.PHP_EOL;
    }
    public function stopEngine(){
        $this->stop();
    }
    protected function stop(){
        echo 'Двигатель остановлен'.PHP_EOL;
    }
    public function speedUp(){
        $this->up();
    }
    protected function up(){
        if ($this->speed < $this->max_speed){
            $this->speed += 10;
            echo 'Скорость: ' . $this->speed . ' км/ч' . PHP_EOL;
        }else{
            echo 'Максимальная скорость! ' . $this->speed . ' км/ч. Осторожно!' . PHP_EOL;
        }
    }
    public function speedDown(){
        $this->down();
    }
    protected function down(){
        if ($this->speed > 0){
            $this->speed -= 10;
            echo 'Скорость: ' . $this->speed . ' км/ч' . PHP_EOL;
        }else{
            echo 'Минимальная скорость. ' . $this->speed . ' км/ч.' . PHP_EOL;
        }
    }
}
?>