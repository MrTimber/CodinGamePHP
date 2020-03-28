<?php

if (PHP_MAJOR_VERSION >= 7) {
    set_error_handler(function ($errno, $errstr) {
        return strpos($errstr, 'Declaration of') === 0;
    }, E_WARNING);
}

require('vendor/autoload.php');

$j = new JuggleCode('src/app.php', 'dest/ocean_of_code.php');
$j->mergeScripts = true;
$j->comments = false;
$j->run();