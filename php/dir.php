<?php

function getDir($path){
    if(!file_exists($path)){
        return '未找到';
    }
    $files = scandir($path);
    foreach($files as $file){
        $new_path = $file.DIRECTORY_SEPARATOR.$file;
        if(is_dir($new_path) && $file != '.' && $file != '..'){
            echo '目录：'.$new_path.PHP_EOL;
            getDir($new_path);
        }else{
            echo '文件'.$new_path.PHP_EOL;
        }
    }
}
 getDir('/var/www/icons');