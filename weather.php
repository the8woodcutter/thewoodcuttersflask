<?php
	$request_ip_address = $_SERVER['REMOTE_ADDR'];
	$weather_service_url = "https://wttr.in/{$request_ip_address}?format=%c%20%x%20%f%20%m%20%T%20%Z";
	$weather_service_request = curl_init($weather_service_url);
	curl_setopt($weather_service_request, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($weather_service_request, CURLOPT_HEADER, 0);
	if (!$weather_service_request_data = curl_exec($weather_service_request)) {
        echo 'Request failed';
        return;
	}
	echo "<em class=\"weather\">[ {$request_ip_address} {$countryCode} {$city} {$weather_service_request_data} ]</em>";
?>