<?php
// роутинг 
// преобразование URL в ЧПУ 
// подключение файлов
//
$URL = getURL();

function getURL(){
    $URL = $_SERVER['REQUEST_URI'];
    $URL = explode('?', $URL);
    $URL = $URL[0];
    // $URL = explode('/', $URL);
    debag($URL);
}
