<?php

if(!$_POST['page']) die("0");

$page = (int)$_POST['page'];

if(file_exists('web/people/page_'.$page.'.html'))
echo file_get_contents('web/people/page_'.$page.'.html');

else echo 'There is no such page!';
?>
