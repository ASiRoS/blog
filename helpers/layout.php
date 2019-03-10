<?php

const MAIN_LAYOUT = 'main';

function get_main_is_loaded() {
    static $main_is_loaded = false;

    if($main_is_loaded == false) {
        $main_is_loaded = true;

        return false;
    }

    return $main_is_loaded;
}

function view($layouts, $data = []) {
    if(is_array($layouts)) {
        foreach ($layouts as $layout) {
            view($layout, $data);
        }

        return;
    }

    if(get_main_is_loaded()) {
        load_layout($layouts, $data);
    } else {
        ob_start();
        load_layout($layouts, $data);
        $content = ob_get_clean();

        load_layout(MAIN_LAYOUT, $content);
    }

    delete_errors();
}


function load_layout($layout, $data = [])
{
    $path = __DIR__  . '/../layouts/';
    $file = $path . $layout . '.php';

    if (file_exists($file)) {
        if(!empty($data)) {
            if(is_string($data)) {
                $content = $data;
                $data = [];
                $data['content'] = $content;
            }

            if(is_array($data)) {
                extract($data);
            }
        }

        require_once $file;
    }
}