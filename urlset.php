<?php 
    include("admin/config.php");
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'];
    if($actual_link=='http://localhost')
    {
        $urlset='http://localhost/varsha/trunk/';
    }
    else
    {
        $urlset='http://jewelfabart.com/';
    }
?>
<!DOCTYPE html>
<html  class="html-home-page">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">