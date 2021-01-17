<?php
// Создать DOM из URL или файла
$html = file_get_html('http://www.google.com/');
 
// Находим все изображения
foreach($html->find('img') as $element) 
   echo $element->src . '<br>';
 
// Находим все ссылки 
foreach($html->find('a') as $element) 
   echo $element->href . '<br>';
?> 

 