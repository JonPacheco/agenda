<?php

namespace app\models;
use app\core\Model;

class Contato extends Model{
    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM contato";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
       

    }



}
