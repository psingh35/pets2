<?php

ini_set ("display_errors", 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function()
{
    $view =  new View;
    echo $view->render
    ('views/home.html');
}
);

//Run fat free
$f3->run();

//Define order page
$f3->route('GET /pets/show', function($f3, $params)
{

}
);

//Define order page for cats
$f3->route('GET /pets/show/cat', function($f3, $params)
{
    echo '<img src="http://i.imgur.com/cpsQq.jpg" alt="cat">';
}
);