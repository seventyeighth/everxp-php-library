<?php

namespace Everxp;

class Headings
{


	public function xp_pattern($pattern_parameters = array())
	{
		$domain = 'https://api.everxp.com';

		if (empty($pattern_parameters))
		{
			return json_encode('This api needs pattern parameters as an array.');
		}

		$xp_patters_parameters_string = "$domain/heading/pattern?";
		//Removes empty values from $pattern_parameters array
		$remove_empty = array_filter($pattern_parameters, 'strlen');
		$xp_patters_parameters_string .=  http_build_query($remove_empty);
		
		//curl_init() Initialize a CURL session.
		$ch = curl_init();
		//CURLOPT_URL pass URL as a parameter
		curl_setopt($ch, CURLOPT_URL, "$xp_patters_parameters_string");
		// Return Page contents. If set false then no output will be returned
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//grab URL and pass it to the variable for showing output
		$response = curl_exec($ch);
		//close curl resource, and free up system resources.
		curl_close($ch);

		$response_decoded = json_decode($response, true);
		if (array_key_exists("heading",$response))
		{
			return $response['heading'];
		}

		return $response;

	}
		
		
	public function xp_quote($quote_parameters = array())
	{

		$domain = 'https://api.everxp.com';

		if (empty($quote_parameters))
		{
			return json_encode('This api needs quote parameters as an array.');
		}

		$xp_quote_parameters_string = "$domain/heading/quote?";
		
		//Removes empty values from $pattern_parameters array
		$remove_empty = array_filter($quote_parameters, 'strlen');
		$xp_quote_parameters_string .=  http_build_query($remove_empty);
		
		//curl_init() Initialize a CURL session.
		$ch = curl_init();
		//CURLOPT_URL pass URL as a parameter
		curl_setopt($ch, CURLOPT_URL, "$xp_quote_parameters_string");
		// Return Page contents. If set false then no output will be returned
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//grab URL and pass it to the variable for showing output
		$response = curl_exec($ch);
		//close curl resource, and free up system resources.
		curl_close($ch);

		$response_decoded = json_decode($response, true);
		if (array_key_exists("heading",$response))
		{
			return $response['heading'];
		}

		return $response;

	}

	public function xp_time($time_parameters = array())
	{

		$domain = 'https://api.everxp.com';

		
		if (empty($time_parameters))
		{
			return json_encode('This api needs time parameters as an array.');
		}

		$xp_time_parameters_string = "$domain/heading/time?";
		
		//Removes empty values from $pattern_parameters array
		$remove_empty = array_filter($time_parameters, 'strlen');
		$xp_time_parameters_string .=  http_build_query($remove_empty);
		
		//curl_init() Initialize a CURL session.
		$ch = curl_init();
		//CURLOPT_URL pass URL as a parameter
		curl_setopt($ch, CURLOPT_URL, "$xp_time_parameters_string");
		// Return Page contents. If set false then no output will be returned
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//grab URL and pass it to the variable for showing output
		$response = curl_exec($ch);
		//close curl resource, and free up system resources.
		curl_close($ch);

		$response_decoded = json_decode($response, true);
		if (array_key_exists("heading",$response))
		{
			return $response['heading'];
		}

		return $response;
	
	}

}


?>