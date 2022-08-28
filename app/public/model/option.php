<?php

use ModulePHP\Database\Select as Select;

class Option
{
    public $result;
    public $error;

    function filter($filter){
         
        switch ($filter) {
            case 'especialidade':
                $query = <<<query
                SELECT id_area, area FROM Expertise
                query;
                break;
            
            case 'expertise':
                $query = <<<query
                SELECT id_area, area FROM Expertise
                query;
                break;
            
            case 'cidades':
                $query = <<<query
                SELECT DISTINCT city FROM Partners;
                query;

            default:
                # code...
                break;
        }
        $select = new Select;
        
        if ($result = $select->result($query)) {
            $this->status = "Busca efetuada com sucesso";
            return $result;
        } else {
            $this->status = $this->error;
            return false;
        }
    }

    
}
