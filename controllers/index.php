<?php

$posts = $app['database']->selectAll();

require 'views/index.view.php';