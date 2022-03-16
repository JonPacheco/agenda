<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Contato;

class ContatoController extends Controller {

    public function index(){
       $objContato = new Contato();
       $dados["lista"] = $objContato->lista();
       $dados["view"] = "Contato/index";

       //echo "<pre>";
      // print_r($dados);
      // exit;

      $this->load("template",$dados);
      
      
        
    }
}