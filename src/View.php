<?php

declare(strict_types=1);

namespace App;

class View{
    public function render(?string $page, array $viewParams) : void 
    {
        require_once("note/templates/layout.php");
    }
}