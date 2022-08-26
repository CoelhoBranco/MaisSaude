<?php

use ModulePHP\Database\Insert as Insert;
use ModulePHP\Database\Select as Select;

class Cadastro
{

    public $sucess;
    public $error;
    public $status2;

    function insert($array)
    {
        $insert = new Insert;
        $values = "";
        $columns = "(name, cpf, adress, city, 
        cep, number, complement, district, state, 
        email, phone, phone2, id_area, presential, 
        c_virtual, consultation_price_presential, consultation_price_online)";


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
                "{$value['presential']}",
                "{$value['c_virtual']}",
                "{$value['consultation_price_presential']}",
                "{$value['consultation_price_virtual']}"
            )
            VALUES;
        }
        $query = <<<query
        INSERT INTO Partners $columns
        VALUES $values
        query;

        //echo $query;

        if ($result = $insert->execute(false, $query)) {
            $this->status = "Cadastro efetuado com sucesso!";
            $this->query = $query;
            return True;
        } else {
            $this->status = $this->error;
            $this->query = $query;
            return false;
        }
    }

    function moveImage($file,$name, $id,  $dir = 'public_html\assets\img\profile/')
    {
        //$destiny =  $destiny . $id . '.' . $ext;
        //$result = move_uploaded_file($url, $destiny);
        /*if (!move_uploaded_file(
            $url,
            sprintf(
               
                $url,
                $ext
            )
        ))*/
        $ext = strtolower(substr($name,-4)); //Pegando extensão do arquivo
        $new_name = $id . $ext; //Definindo um novo nome para o arquivo
         //Diretório para uploads 
        $result = move_uploaded_file($file, $dir.$new_name); //Fazer upload do arquivo
        //echo("Imagen enviada com sucesso!");

            if ($result) {
                $this->status2 = '';
                $this->url = $dir.$new_name;
                return $result;
            } else {
                $this->status2 = $this->error;
                //$this->url = $destiny;
                return false;
            }
    }

    function selecId($name)
    {

        $select = new Select;

        $query = <<<query
            SELECT id FROM Partners
            WHERE name='$name';
            query;

        if ($result = $select->result($query)) {
            $this->status = "200 OK";
            return $result;
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
