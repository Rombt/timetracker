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

      $file_controller = 'controllers/'.$url[0].'.php';
      if (file_exists($file_controller)) {

         require_once $file_controller;
         $class_name = "Controller_" . $url[0]; 
         $controller = new $class_name;
      }else{
         echo 'Error controller dose not exist!!!';
      }
   }
   
}