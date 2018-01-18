<?php

ini_set ("display_errors", 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//global view directory
$template =  new Template();

//define a default route
$f3->route('GET /', function()
{
    global $template;
    echo $template->render('views/form1.html');
}
);

$f3->route('GET /order',
function()
{
    global $template;
    echo $template->render('views/form2.html');
}
);

$f3->route('POST /order2',
    function()
    {
        global $template;
        echo $template->render('views/results.html');
    }
);

//Run fat free
$f3->run();