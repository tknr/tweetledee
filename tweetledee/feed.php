<?php
$user=$_GET["user"];

$feed = file_get_contents('http://127.0.0.1/tweetledee/userrss.php?exclude_retweets=1&exclude_replies=1&c=200&cache_interval=86400&user='.$user);
header("Content-Type: application/rss+xml");
header("Content-type: text/xml; charset=utf-8");
echo $feed;
exit;
