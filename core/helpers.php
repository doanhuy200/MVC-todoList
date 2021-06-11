<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
if (!function_exists('view')) {
    function view($name, $data = [])
    {
        extract($data);

        return require "app/views/{$name}.view.php";
    }
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
if (!function_exists('redirect')) {
    function redirect($path)
    {
        header('Location: ' . $path);
        die();
    }
}
