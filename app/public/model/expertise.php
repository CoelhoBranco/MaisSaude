<?php

use ModulePHP\Database\Select as Select;


class Expertise
{
    public $result;
    public $error;

    function select_specialty()
    {
        $select = new Select;

        $query = <<<query
            SELECT id_area, area FROM expertise
            query;


        //$select->result($query);


        if ($result = $select->result($query)) {
            $this->status = "201: Cadastro efetuado com sucesso, efetue o login.";

            return $result;
        } else {
            $this->status = $this->error;
            return false;
        }
    }
}
