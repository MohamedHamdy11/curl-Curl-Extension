<?php

require 'includes/newsInterface.php';
require 'includes/dbNews.php';
require 'includes/apiNews.php';
require 'includes/newsSystem.php';


//$dbNews = new dbNews();
//$system = new newsSystem($dbNews);

$apiNews = new apiNews();
$system = new newsSystem($apiNews);

$pid = (int)$_GET['id'];
$article = $system->getPost($pid); //return array of post,comments

//echo "<pre>";
//print_r($article);

$comments = $article['comments'];

echo "<h1>".$article['post']['title']."</h1>";
echo "<h1>".$article['post']['body']."</h1>";
echo "<hr />";
echo "<h1>Comments</h1>";

foreach ($comments as $comment)
{
    echo 'name : '.$comment['name'].' email : '.$comment['email'].'<br/>';
    echo $comment['body'].'<hr/>';

}
