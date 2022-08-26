<?php
use ModulePHP\MVC as MVC;
$M["Render"]->body->header->base->layout = 1;

$title = "Login - ".SITE_NAME;
$description = SITE_NAME." - Login";
//$M["Render"]->head->metatag->title = $title;
$M["Render"]->head->metatag->title = $title;
$url = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$ModulePHP;
//$ModulePHP["Render"]->head->metatag->title = $title;
MVC::Module("forms/login");
$loginform = new LoginForm();
echo $loginform->render();
