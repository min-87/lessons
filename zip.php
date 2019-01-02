<?php
//архивирование
$zip = new ZipArchive();
$zip->open('test.zip',ZipArchive::CREATE);
function process($path, ZipArchive $zip){
    $files = scandir($path);
    foreach ($files as $file){
        if(in_array($file,['.','..'])){
            continue;
        }
        $filepath = $path."/".$file;
        if (is_dir($filepath)){
            process($path."/".$file,$zip);
            continue;
        }
        $zip->addFile($filepath);
    }
}
process('libs',$zip);
$zip->close();

//разархивирование
$zip = new ZipArchive();
$zip->open('test.zip');
$zip->extractTo('C:/xampp/htdocs/les');
$zip->close();