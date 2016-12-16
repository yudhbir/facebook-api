<?php

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me', $token);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

echo 'Name: ' . $user->getName();
echo "<br>";
echo 'ID: ' . $user->getId()."<br>";
echo "<br>";


$picture = "/".$user->getId()."/picture";
$profile_pic= 'http://graph.facebook.com'.$picture;
echo "<img src=\"" . $profile_pic . "\" />"; 

//get upload post pictures

/* 

		$data = [
		  'message' => 'Only Brave can change the war into victory.',
		  'source' => $fb->videoToUpload('warr.jpg'),
		];
		try {
		  // Returns a `Facebook\FacebookResponse` object
		  $response = $fb->post('/me/photos',$data,$token);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}
		echo "<pre>";print_r($response->getDecodedBody());echo "</pre>";
 */ 
 
require_once('upload_post.php');











