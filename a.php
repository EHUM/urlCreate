<?php

    // $cdir = __DIR__ . '/aabb';
    // echo $cdir;
    // mkdir($cdir, 0777);
    function create_folders($dir){ 
        return is_dir($dir) or (create_folders(dirname($dir)) and mkdir($dir, 0777)); 
    }

    $folder = 'abcdefg';

    create_folders($folder);
    $i = 0;
    while ($i < 3){
        switch ($i){
            case 1:
                create_folders($folder.'/js');
                break;
            case 2:
                create_folders($folder.'/css');
                break;
        }
        $i ++;
    }

