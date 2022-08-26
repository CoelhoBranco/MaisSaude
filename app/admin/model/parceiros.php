<?php

use ModulePHP\Database\Insert as Insert;
use ModulePHP\User as User;

class Partners {
    
    public $sucess;
    public $error;

    function insert($array) {
        $insert = new Insert;
        $values = "";
        $columns = "(
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
           
        
        foreach ($array as $value) {
            $values .= <<<VALUES
            (
                "{$value['nome']}",
                "{$value['cpf']}",
                "{$value['endereco']}",
                "{$value['cidade']}",
                "{$value['cep']}",
                "{$value['numero']}",
                "{$value['complemento']}",
                "{$value['bairro']}",
                "{$value['estado']}",
                "{$value['email']}",
                "{$value['celular']}",
                "{$value['telefone']}",
                "{$value['id_area']}",
                "{$value['preco_consulta']}",
                "{$value['complemento']}",
                "{$value['modality']}",    
            )
            VALUES;
        }
        $query = <<<query
        INSERT INTO Partners$columns
        VALUES $values
        query;
        if ($result = $insert->query($query)) {
            $this->status = "201: Cadastro efetuado com sucesso, efetue o login.";

            return True;
        } else {
            $this->status = $this->error;
            return false;
        }
    }
}


#Parceiros Controller
/*
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

