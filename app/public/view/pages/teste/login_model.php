<?php
header("Location:/cadastro");
$M["Render"]->body->header->base->layout = 3;
use ModulePHP\MVC as MVC;
$user = false;
$pw = false;

$check =  isset($_POST['user'], $_POST['pw']);
if ($check){
    $user = $_POST['user'];
    $pw = $_POST['pw'];
}
#MVC::Model("humanverify");
MVC::Model("login");
#humanverify = new HumanVerify();
#humanverify->setUserToken($_POST['token']);
if (/*$humanverify->request()->success == */true) {
    $result = new Login($user, $pw);
    $response['success'] = $result->success;
    $response['status'] = $result->status;

} else {
    $response['sucess'] = false;
    $response['status'] = "Não aprovado no reCAPTCHA, tente novamente!";
}

MVC::JsonResponse($response); 