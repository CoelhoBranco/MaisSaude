<?php
use ModulePHP\MVC as MVC;

MVC::Model('expertise');

$expertise = new Expertise;

$result = $expertise->select_specialty();

MVC::JsonResponse($result);