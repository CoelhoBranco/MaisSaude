<?php

namespace ModulePHP\Base;

class Script
{
    public $script = 0;

    public function constructor()
    {
        # code...
    }

    public function render()
    {
        switch ($this->script) {
            case 'login':
                return <<<content
                
                <script defer src="assets/js/login.js"></script>
            
            content;
                # code...
                break;
            
            case "cadastro":
                return <<<content
                <script defer src="assets/js/cadastro.js"></script>
                content;
                
            default:
                return <<<content
                
                    content;
                
        }
    }
}

#<script defer src="assets/js/login.js"></script>