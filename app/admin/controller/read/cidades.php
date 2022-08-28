<?php
use ModulePHP\MVC as MVC;

MVC::Model('parceiros');

$parceiros = new Partners();
$result = $parceiros->filtro_cidade();

MVC::JsonResponse($result);

?>