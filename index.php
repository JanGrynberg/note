<?php

declare(strict_types=1);

namespace App;

require_once("note/src/Utils/debug.php");
require_once("note/scr/Controller.php");

$request = [
    'get'=> $_GET,
    'post'=> $_POST
];

$controller = new Controller($request);
$controller -> run();


