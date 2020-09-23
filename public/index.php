<?php
header("Content-Type: text/html; charset=utf8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

use Src\Traits\TraitUrlParser;

class Teste
{

    use TraitUrlParser;

    public function __construct()
    {
        $url = $this->parserUrl();
        var_dump($url);
    }
}

$new = new Teste();
