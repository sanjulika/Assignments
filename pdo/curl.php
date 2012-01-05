<?php

	$ch = curl_init();

	curl_setopt($ch,CURLOPT_HTTPHEADER,array('X-Zomato-API-Key : 4f0417394980f6374970834f04173949'));
	//curl_setopt($ch, CURLOPT_HEADER, true);
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_URL, 'https://api.zomato.com/v1/cities.json');
	curl_exec($ch);
	curl_close ($ch);
//using curl option
//curl -H 'X-Zomato-API-Key: 4f0417394980f6374970834f04173949' https://api.zomato.com/v1/cities.json


	?>
