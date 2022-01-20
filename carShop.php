<?php
spl_autoload_register(function($class){
   
   $filename =  $class . '.php';
   if(file_exists($filename)){
       include $filename;
   }
  });
  
  $car_1 = new Corolla(Corolla::MODEL, Corolla::BLACK, 2020, 450);
  $car_2 = new Camry(Camry::MODEL, Camry::RED, 2018, 140);
  $catalog = [$car_1, $car_2];
  // полиморфизм
   function carShop($catalog){
    foreach($catalog as $catalog){
      echo $catalog->getInfo() . $catalog->getEngineInfo();
                }
  }
  carShop($catalog);

    // $car_1->start();
    // $car_1->up();
    // $car_1->down();
    // $car_1->stop();

    // $car_2->start();
    // $car_2->up();
    // $car_2->down();
    // $car_2->stop();
  ?>
 