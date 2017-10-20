<?php
require('vendor/autoload.php');
use \FinalPHP\Frameworks\Nano;

$f = Nano\NanoFramework::NewWithConfigFiles("./nano.yml");

{
    $r = $f->get_router();
    $r->GET("index.read", "/", "Index");
}	

$f->go();
