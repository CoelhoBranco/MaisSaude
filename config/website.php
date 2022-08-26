<?php
$constant = function ($constant) {
    return $constant;
};

#Website informations.
const SITE_NAME = "Mais Saude";
const SITE_TWITTER = "";
const SITE_COLOR1 = "#A0F";
const SITE_COLOR2 = "#FA0";
const SITE_AUTHOR = "Leonardo Coelho - http://leonardo.coelhobranco.com.br/";
const SITE_URL = "http://modulephp.com";
const SITE_BANNER = "url('assets/img/background.jpg')";
define("SITE_BANNER2", "linear-gradient({$constant(SITE_COLOR1)},{$constant(SITE_COLOR2)})");
const SITE_LOGO = "/assets/img/logo-300x150.png";


//Outras informações sobre o site