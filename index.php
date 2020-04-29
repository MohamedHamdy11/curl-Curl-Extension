<?php

require 'includes/newsInterface.php';
require 'includes/dbNews.php';
require 'includes/apiNews.php';
require 'includes/newsSystem.php';


//$dbNews = new dbNews();
//$system = new newsSystem($dbNews);

$apiNews = new apiNews();
$system = new newsSystem($apiNews);


$news = $system->getNews();

//echo '<pre>';
//print_r($news);

foreach ($news as $post)
{
    $title = $post['title'];
    $id    = $post['id'];
    echo "<a href='post.php?id=$id'>$title</a><br/>";
}