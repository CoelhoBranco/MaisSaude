<?php
use ModulePHP\MVC as MVC;

MVC::Model('option');

$expertise = new Option;

$option = $_GET['option'];
if (isset($option) == 'expertise') {
$result = $expertise->select_specialty();
}
elseif ($option == 'cidade') {
    # code...
}
//echo $expertise->status;

MVC::JsonResponse($result);