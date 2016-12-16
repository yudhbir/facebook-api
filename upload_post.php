<?php

//upload post
	
/* 	
	$linkData=[  
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
 
 // echo "<pre>";print_r($response->getDecodedBody());echo "</pre>";


//get List of facebook posts
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

/* upload video into the facebook */

/* 	
		$data = [
		  'title' => 'Big Bunny Video',
		  'description' => 'Big Bunny Video.',
		  'source' => $fb->videoToUpload('mov_bbb.mp4'),
		];
		try {
		  // Returns a `Facebook\FacebookResponse` object
		  $response = $fb->post('/me/videos',$data,$token);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}
		echo "<pre>";print_r($response->getDecodedBody());echo "</pre>";
		
*/

//get List of facebook videos uploaded
/* 
		try {
		 
		  $response1 = $fb->get('/'.$user->getId().'/videos/uploaded',$token);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}
	echo "<pre>";print_r($response1->getDecodedBody());echo "</pre>";

 */

die;











