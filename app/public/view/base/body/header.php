<?php

namespace ModulePHP\Base;

class Header
{
    public $layout = 0;

    public function constructor()
    {
        # code...
    }

    public function render()
    {
        switch ($this->layout) {
            case 1:
                return <<<content
                
                <img src="assets/img/logo.png" alt="">
            
            content;
                # code...
                break;
            
            case 2:
                return <<<content
                <div class="navbar" id='navbar'>
                    <img src="assets/img/logo.png" alt="logo mais saude">
                </div>
                content;
                
            default:
                return <<<content
                
                    <img src="assets/img/logo.png" alt="">
        
                    content;
                
        }
    }
}
