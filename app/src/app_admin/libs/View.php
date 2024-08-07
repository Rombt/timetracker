<?php 

class View 
{  

   public function __construct(){
      
   }
   

   public function render($path, $file='index'){

      if (file_exists(__DIR__ . '/../views/' . $path . '/' . $file . '.php')) {
        require __DIR__ . '/../views/' . $path . '/' . $file . '.php';
      }else {
         App::showError("Template by $path does not exist!!!");
      }
   }
}