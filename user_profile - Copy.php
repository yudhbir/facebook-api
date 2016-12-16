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
// echo "<pre>";print_r($user);echo "</pre>";

// echo 'Name: ' . $user['name'];
// OR
echo 'Name: ' . $user->getName();
echo 'ID: ' . $user->getId()."<br>";
echo "<br>";

// $request = new FacebookRequest('GET','/'.$user->getId().'/picture');
// $response = $request->execute();
// $graphObject = $response->getGraphObject();
$picture = "/".$user->getId()."/picture";
$profile_pic= 'http://graph.facebook.com'.$picture;
echo "<img src=\"" . $profile_pic . "\" />"; 

//get upload pictures

/* 	$photos = "/".$user->getId()."/photos/uploaded";
	$profile_photos= 'https://graph.facebook.com'.$photos;
	$url_with_token = $profile_photos . "?access_token={$token}";
	$mutual = json_decode(file_get_contents($url_with_token));
	echo "<pre>";print_r($mutual);echo "</pre>";
 */ 
 
 
//upload post
	
/* 	$linkData=[  
				'message' => "Let's Begin the Game!!!!!",
			];	
	try {
	  // Returns a `Facebook\FacebookResponse` object
	  $response = $fb->post('/me/feed',$linkData,$token);
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}
 */
 // $graphNode = $response->decodedBody();
// echo "<pre>";print_r($response);echo "</pre>";
// echo 'Posted with id: ' . $graphNode['id']; 

 
	try {
	 
	  $response = $fb->get('/'.$user->getId().'/feed',$token);
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}
echo "<pre>";print_r($response->getDecodedBody());echo "</pre>";

die;











