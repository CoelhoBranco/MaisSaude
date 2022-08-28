<?php

use ModulePHP\MVC as MVC;

MVC::Model('option');

$option = new Option;

$option_value = $_GET['option'];

$result = $option->filter($option_value);

MVC::JsonResponse($result);
