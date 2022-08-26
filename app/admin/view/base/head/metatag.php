<?php

namespace ModulePHP\Base;

class Metatag
{
    public $title = SITE_NAME;
    public function render()
    {
        $content = <<<content
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>$this->title - Mais Saúde</title>
        content;

        return $content;
    }
}