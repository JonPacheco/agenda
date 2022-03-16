<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends controller{
    
   public function index(){
     $dados["view"] = "home";
     $this->load("template", $dados);
   } 
}
