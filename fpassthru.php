<?php
/**
 * получить Web- страницу и изменить на ней титульный тег
 */
// Открыть файл с использованием http-протокола
if (!($myFile=fopen("http://www.php.net/","r"))){
    echo 'Нельзя открыть файл';
    exit;
}
$keepSearching = true;
while (!feof($myFile) && $keepSearching){
    //Прочитать строку из файла
    $myLine = fgets($myFile,1024);
    //поиск тега тела
    if (mb_eregi("<body",$myLine)){
        //После тега тела титульный тег найти невозможно
        $keepSearching = false;
    }
    //Попробовать добавить текст после титульного тега
    $myLine = mb_eregi_replace("<title>", "<title>(fpassthru example)", $myLine);
    //Отправить строку в браузер
    print ("$myLine");
}
//Отправить остаток файла в браузер
fpassthru($myFile);