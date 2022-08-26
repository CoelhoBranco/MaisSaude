<?php

namespace ModulePHP\Base;

class Style
{
    public function render()
    {
        $content = <<<content
        <link rel="stylesheet" href="assets/css/style.css">
        
        content;

        return $content;
    }
}