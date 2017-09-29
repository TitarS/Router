<?php

require'core/partials/top.php';

foreach ($posts as $post) {
    echo $post['title'] . '<br />';
}

require'core/partials/bottom.php';
