<?php

use eftec\bladeone\BladeOne;


function blade()
{
    $views = __DIR__ . '/../views';
    $cache = __DIR__ . '/../cache';
    return $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
}
