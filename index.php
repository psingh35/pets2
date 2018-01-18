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
$f3->route('GET /order',
function()
{
  echo '<h1> Form1</h1>';
}
);

$f3->route('GET /order2',
    function()
    {
        echo '<h1> form2</h1>';
    }
);

$f3->route('GET /results',
    function()
    {
        echo '<h1> Results</h1>';
    }
);

//create an order route
$f3->route('GET /order', function ()
{
    echo '<h1></h1> Add  the show order</h1>';
});


//Define order page
$f3->route('GET /pets/show', function($f3, $params)
{
 //$f3->set('cat', @$params['cat']);
}
);

//Define order page for cats
$f3->route('GET /pets/show/cat', function($f3, $params)
{
    echo '<img src="http://i.imgur.com/cpsQq.jpg" alt="cat">';
}

);
//Define a default rout
$f3->route('GET /pets/animal/show', function ()
{
    $template = new Template();
    echo $template ->render ('views/Jewelry.html');
}
);

//Run fat free
$f3->run();