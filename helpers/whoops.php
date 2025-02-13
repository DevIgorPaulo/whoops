<?php

if($_ENV['ENV'] == 'developer'){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register(); 
    return;
}

echo ("Ocorreu algum erro! Contate o suporte");
die;
