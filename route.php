<?php
$site_url = 'http://localhost/blog/';
$current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$request = str_replace($site_url,'' , $current_url);
?>
