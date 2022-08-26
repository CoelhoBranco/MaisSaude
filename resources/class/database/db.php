<?php
namespace ModulePHP\Database;
use mysqli;
use Dotenv\Dotenv;
/*require ('config/database.env');*/
//echo '../config/database.env' ;

/*foreach ($teste as $t) {
    echo $t;
    echo '<br>';
}
*/
//echo getenv('$_ENV['db_host');


class Con extends mysqli{
    function __construct() {
        
        //print_r($_ENV);
        $dotenv = Dotenv::createImmutable('./config', 'database.env' );
        $dotenv->load();   
        
        if($_ENV['db_host'] && $_ENV['db_user'] && $_ENV['db_pw'] && $_ENV['db_name']){
            parent::__construct($_ENV['db_host'], $_ENV['db_user'], $_ENV['db_pw'], $_ENV['db_name']);
            if ($this->connect_error) {
                $this->status = [0, "Erro de conexão com o banco de dados, contate o suporte."];
            } else {
                $this->set_charset("utf8");
            }
        } else {
            $this->status = [0, "Banco de dados não definido"];
        }
        
    }
}

class DB {
    public $status;

    static function escape($string) {
        $con = New Con();
        $string = $string === true ? "True" : ($string === false ? "False" : $string);
        $string = $con->real_escape_string($string);
        $con->close();
        return $string;
    }

    static function query($query) {
        $con = New Con();
        $return = $con->query($query);
        $con->close();
        return $return;
    }
}