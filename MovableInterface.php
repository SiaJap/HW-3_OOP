<?php
interface MovableInterface{
    //вкл зажигание
    public function start();
    //выкл зажигание
    public function stop();
    //увеличить скорость
    public function up();
    //уменьшить скорость
    public function down();
}
?>