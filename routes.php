<?php

/*$router->register([
    '' => 'controllers/index.php',
    'contact' => 'controllers/contact.php',
    'about' => 'controllers/about.php'
]);*/

$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');