<?php
use ModulePHP\MVC as MVC;

MVC::Model('parceiros');

$parceiros = new Partners();
$result = $parceiros->selectAll();

//echo $parceiros->sucess;

MVC::JsonResponse($result);

?>