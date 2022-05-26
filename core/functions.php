<?php

function getPageName($strip_slashes = false, $return_array = false)
{
    $page = $_SERVER['REQUEST_URI'];
    $page = stripslashes($page);

    if (true === $strip_slashes) :
        $page = str_replace('/', '', $page);
    endif;

    if (true === $return_array) :
        $page = explode('/', $page);

        if (true == !empty($page)) :
            return array_filter($page);
        endif;
    endif;

    return parse_url($page, PHP_URL_PATH);
}

function view($filename, $contents = array())
{
    if (false === file_exists('views/' . $filename . '.php')) :
        require_once('views/404.php');
        exit();
    endif;

    if (true === is_array($contents) && true === !empty(($contents))) :
        extract($contents);
    endif;

    require_once('views/' . $filename . '.php');
}

function loadFilesFromDir($files, $directory)
{
    foreach ($files as $file) :
        $fileinfo = pathinfo($file);

        if ($file == '.' || $file == '..' || isset($fileinfo['extension']) && $fileinfo['extension'] !== 'php') :
            continue;
        endif;

        $file = $directory . '/' . $file;

        if (file_exists($file)) :
            require_once($file);
        endif;
    endforeach;
}
