<?php

use ModulePHP\Database\Select as Select;

class Partners {
    
    public $sucess;
    public $error;
 
    function __construct() {
        $this->columns = "(
            name,
            cpf,
            adress, 
            city,
            cep,
            number,
            complement,
            discrit,
            state,
            email,
            phone,
            phone2,
            id_area,
            consultation_price,
            id_modality)";
        }

    function select($parameters) {
        $select = new Select;
 
        $query = <<<query
        SELECT $parameters FROM Partners
        query;
      
        return $select->result($query);
    }

    function selectAll() {
        $select = new Select;
        
        $query = <<<query
        SELECT id, name, adress, city, e.area, phone,  consultation_price_presential, consultation_price_online
        FROM Partners AS P
        INNER JOIN Expertise as E 
            on p.id_area = e.id_area
        query;
        
        $this->sucess = true;
        $this->error = false;
        
        return $select->result($query);
    }

    function filtro_cidade(){
        $select = new Select;

        $query = <<<query
        SELECT city
        FROM Partners AS P;
        query;
        
        $this->sucess = true;
        $this->error = false;
        
        return $select->result($query);


    }

}

/*
#Parceiros Controller
$parceiros = new Partners();
$result = $parceiros->selectAll();

MVC::JSONResponse($result);

#Se for fazer renderização backend;
$parceirosarray = [];

foreach ($result as $parceiro) {
   array_push($parceirosarray, "<a href='/parceiro?id={$parceiro['id']}>Link para o parceiro {$parceiro['nome']}</a>");
}
$example = "href='/parceiro?id={$parceiro['id']}";

$id = $__GET["id"];

#Parceiro
$parceiro = new Partners();
$result = $parceiro->select($id);

*/



