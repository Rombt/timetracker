<?php 

class App
{
   public function __construct () {
      session_start();

      $get_url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : false;
      if ($get_url) {
         $url = explode('/',rtrim($get_url,'/'));
      }else{
         $url[] = "index";
      }

      $file_controller = __DIR__ . '/../controllers/'.$url[0].'Controller.php';

      if (file_exists($file_controller)) {

         require_once $file_controller;
         $class_name = $url[0] . "Controller"; 

         if (class_exists($class_name)) {
            $controller = new $class_name;
         }else {
            self::showError( 'Error!  Controller class does not exist!!!' );
         }


         if (isset($url[1])) {
            
            

            
         }else {
            $controller->index();
         }


      }else{
         self::showError( 'Error controller does not exist!!!' );
      }
   }

   static function showError( $error ){
       echo '<h1>' . $error . '</h1>';
   }
   
   static function dump( $param ){
       echo '<pre>';
       var_dump($param);
       echo '</pre>';
   }
   
}