<?php

$path = 'C:\\xampp\\htdocs';

function walk($path,$depth=0){
    $files=scandir($path);
    array_shift($files);
    array_shift($files);
    foreach ($files as $file){
        $tmp=$path."\\$file";
        echo str_repeat('----',$depth).$file;
        if (is_dir($tmp)){
            echo "[*]<br>";
            walk($tmp,$depth+1);
            continue;
        }
        echo '<br>';
    }
}

walk($path);