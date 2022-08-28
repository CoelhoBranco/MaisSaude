<?php

use ModulePHP\Database\Select as Select;
use ModulePHP\Database\DB as DB;
use ModulePHP\User as User;

class Login {
    private $User;
    private $username;
    private $inputPW;
    public $success;
    public $error;

    function __construct($username=false, $password=false) {
       
        $this->User = new User;
        $this->username = DB::escape($username);
        $this->inputPW = DB::escape($password);
        $select = new Select;

        if (!$result = $select->result("SELECT password FROM Users WHERE username = '$this->username' LIMIT 1")) {
            $this->success = false;
            $this->status = "Sistema Fora do ar!";
            return false;
        }
                
        if (!password_verify($this->inputPW, $result[0]["password"])) {
            $this->success = false;
            $this->status = "Senha incorreta!";
            return false;
        }

        if (!$this->User->login($this->username)) {
            $this->success = false;
            $this->status = "Erro ao efetuar login!";
            return false;
        }
        
        $this->success = true;
        $this->status = "Login efetuado com sucesso";
        return true;

    }
}