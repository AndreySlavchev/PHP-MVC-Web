<?php
/**
 * Функцията __autoload за автоматично включване на класовете от папките - models, components и controllers
 */
function __autoload($class_name) {

    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    foreach ($array_paths as $path) {

        $path = ROOT . $path . $class_name . '.php';

        if (is_file($path)) {
            include_once $path;
        }
    }
}
