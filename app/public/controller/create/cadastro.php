<?php

use ModulePHP\MVC as MVC;
MVC::Model('cadastro');

$cadastro = new Cadastro();

$atendimento1 = $_POST['modalidade_atendimento_1'];
$atendimento2 = $_POST['modalidade_atendimento_2'];
$valor1 = $_POST['valor_atendimento_1'];
$valor2 = $_POST['valor_atendimento_2'];

$_POST['c_virtual'] = 0;
$_POST['presential'] = 0;


if ($atendimento1 == 'virtual') {
    $_POST['consultation_price_virtual'] = $valor1;
    if ($valor1){
        $_POST['c_virtual'] = 1;
    } 
}
elseif ($atendimento1 == 'presential') {
    $_POST['consultation_price_presential'] = $valor1;
    if ($valor1){
        $_POST['presential'] = 1;
    } 
}
if ($atendimento2 == 'virtual') {
    $_POST['consultation_price_virtual'] = $valor2;
    if ($valor2){
        $_POST['c_virtual'] = 1;
    } 
}
elseif ($atendimento2 == 'presential') {
    $_POST['consultation_price_presential'] = $valor2;
    if ($valor2){
        $_POST['presential'] = 1;
    } 
}

    //$_POST['preco_consulta'] = $_POST['valor_atendimento_1'];

$array = [$_POST];
print_r($array);
print_r($_FILES);


$response['success'] = $cadastro->insert($array);
$response['status'] = $cadastro->status;
$response['query'] = $cadastro->query;

MVC::JSONResponse($response);
/*

Array
(
    [nome] => 
    [cpf] => 
    [cep] => 
    [endereco] => 
    [numero] => 
    [complemento] => 
    [bairro] => 
    [cidade] => 
    [estado] => 
    [email] => 
    [celular] => 
    [telefone] => 
    [especialidade] => 
    [modalidade_atendimento_1] => virtual
    [valor_atendimento_1] => 
    [modalidade_atendimento_2] => presential
    [valor_atendimento_2] => 
    [preco_consulta] => 
)*/