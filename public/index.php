<?php
$folder_url = substr($_SERVER['SCRIPT_NAME'], 0, (strripos($_SERVER['SCRIPT_NAME'], "/")+1));
if ($folder_url == "/")
{
        $folder_url = null;
}
$user=null;
$params = explode("/", str_replace($folder_url, "", $_SERVER['REQUEST_URI']));
foreach($params as $index=>$param){
	switch ($index){
		case 0:{
			$user=$param;
			break;
		}
	}
}

$feed = file_get_contents('http://127.0.0.1/tweetledee/?mode=userrss&exclude_retweets=1&exclude_replies=1&c=200&cache_interval=86400&user='.$user);
header("Content-Type: application/rss+xml");
header("Content-type: text/xml; charset=utf-8");
echo $feed;
exit;

