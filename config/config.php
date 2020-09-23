<?php
#Diretorios Raizes
$PastaInterna = "";

define('DIRPAGE__', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}"); #Caminho Variavel Aplicação Host

if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {

    define('DIRREQ__', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); #Caminho Fisico Aplicação no Server
} else {
    define('DIRREQ__', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios especificos
define('DIRIMG__', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/img/");
define('DIRCSS__', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/css/");
define('DIRJS__', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/js/");
define('DIRFONTS__', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/fonts/");
define('DIRADMIN__', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}public/admin/");

#Acesso DataBase
define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "password");
