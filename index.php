<?php

//принимаем запрос
$data = json_decode(file_get_contents('php//input'), true);
file_put_contents('file.txt', '$data: '.print_r($data, 1). "\n", FILE_APPEND);

//соединем с ботом
https://api.telegram.org/bot5308897516:AAEQ-gC17hWAHnN4p_DLsf6NAHWc3n21R8w/setwebhook?url=C:/OpenServer/domains/telega-bot/index.php

//
////Обрабатываем ручной ввод или нажатие на кнопку
//$data = $data['callback_query'] ? $data['callback_query'] : $data['message'];
//
////Важные константы
//define('TOKEN', )
