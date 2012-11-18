<?php
include("url.php");
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//$stuff = curl_exec($ch);

//$redditObject = json_decode($stuff);
//
//$initialHash = $redditObject->data->modhash;
//
//echo "Initial hash: " . $initialHash . PHP_EOL;

$time = 0;
$currentHash = '';
$previouslySpewedPosts = array();
while (1) {
    $newStuff = curl_exec($ch);
    $newRedditObject = json_decode($newStuff);
    
    if ($newRedditObject->data->modhash != $currentHash) {
        $previouslySpewedPosts = spewPosts($newRedditObject, $previouslySpewedPosts);
        $currentHash = $newRedditObject->data->modhash;
        $time = date('c');
        echo "New hash: " . $currentHash . ' Time: ' . $time . PHP_EOL;
    }
    sleep(5);
    $time = $time + 5;
    //echo "Seconds: " . $time . PHP_EOL;
}

function spewPosts($redditObject, $previouslySpewedPosts = array())
{
    foreach ($redditObject->data->children as $post) {
        $postId = $post->data->id;
        if (!in_array($postId, $previouslySpewedPosts)) {
            $previouslySpewedPosts[] = $postId;
            echo $post->data->url . PHP_EOL;
        }
    }
    return $previouslySpewedPosts;
}