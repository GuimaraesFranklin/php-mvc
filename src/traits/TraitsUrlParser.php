<?php

namespace Src\Traits;


trait TraitUrlParser
{
    #Dividir ur em array
    public function parserUrl()
    {
        return explode("/", rtrim($_GET['url'], FILTER_SANITIZE_URL));
    }
}
