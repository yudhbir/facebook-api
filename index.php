<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$app_id='xxxxxxx';
$app_secret='xxxxxxxx';
$fb = new Facebook\Facebook([
  'app_id' => $app_id, // Replace {app-id} with your app id
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.2',  
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','manage_pages','publish_pages','publish_actions','user_posts,user_videos']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost:8080/facebook/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>'

?>