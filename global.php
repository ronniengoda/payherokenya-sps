<?php 
function sendRequest($url,$data){
		//Initiate cURL.
		$ch = curl_init($url);

		//Tell cURL that we want to send a POST request.
		curl_setopt($ch, CURLOPT_POST, 1);

		//Attach our encoded JSON string to the POST fields.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		//Set the content type to application/json.
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		//Dont return result to screen,store in a variable.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

		//Execute the request.
		$result = curl_exec($ch);
		return $result;
	}
