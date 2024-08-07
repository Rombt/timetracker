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

   public function addHeader() {
            if (file_exists(__DIR__ . '/../views/header.php')) {
        require __DIR__ . '/../views/header.php';
      }else {
         App::showError("Template for header does not exist!!!");
      }
   }

   public function addFooter() {
            if (file_exists(__DIR__ . '/../views/footer.php')) {
        require __DIR__ . '/../views/footer.php';
      }else {
         App::showError("Template for footer does not exist!!!");
      }
   }
}