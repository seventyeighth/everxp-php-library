<?php

namespace EverxpHeadings;

class Headings
{

	private $domain = 'https://api.everxp.com';

	public function xp_pattern($pattern_parameters = array())
	{
		if(empty($pattern_parameters)){
			echo 'This api needs pattern as an array.';
		}
		else if(!isset($pattern_parameters['api_key'])){
			echo 'Api Key is a required field, Please add the Api Key.';
		}
		else if($pattern_parameters['api_key']== ''){
			echo 'Api Key field can not be empty.';
		}
		else if(!isset($pattern_parameters['pattern'])){
			echo 'Pattern is a required field, Please add the Pattern.';
		}
		else if($pattern_parameters['pattern']== ''){
			echo 'Pattern field can not be empty.';
		}
		else if(!isset($pattern_parameters['lang'])){
			echo 'Lang is a required field, Please add the Lang.';
		}
		else if($pattern_parameters['lang']== ''){
			echo 'Lang field can not be empty.';
		}
		else{
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

			return $response;
		}
	}
		
		
	public function xp_quote($quote_parameters = array())
	{
		if(empty($quote_parameters)){
			echo 'This api needs pattern as an array.';
		}
		else if(!isset($quote_parameters['api_key'])){
			echo 'Api Key is a required field, Please add the Api Key.';
		}
		else if($quote_parameters['api_key']== ''){
			echo 'Api Key field can not be empty.';
		}
		else if(!isset($quote_parameters['quote'])){
			echo 'Quote is a required field, Please add the Quote.';
		}
		else if($quote_parameters['quote']== ''){
			echo 'Quote field can not be empty.';
		}
		else if(!isset($quote_parameters['lang'])){
			echo 'Lang is a required field, Please add the Lang.';
		}
		else if($quote_parameters['lang']== ''){
			echo 'Lang field can not be empty.';
		}
		else{
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

			return $response;
		}			
	}

	public function xp_time($time_parameters = array())
	{
		if(empty($time_parameters)){
			echo 'This api needs pattern as an array.';
		}
		else if(!isset($time_parameters['api_key'])){
			echo 'Api Key is a required field, Please add the Api Key.';
		}
		else if($time_parameters['api_key']== ''){
			echo 'Api Key field can not be empty.';
		}
		else if(!isset($time_parameters['time'])){
			echo 'Time is a required field, Please add the Time.';
			die;
		}
		else if($time_parameters['time']== ''){
			echo 'Time field can not be empty.';
			die;
		}
		else if(!isset($time_parameters['lang'])){
			echo 'Lang is a required field, Please add the Lang.';
			die;
		}
		else if($time_parameters['lang']== ''){
			echo 'Lang field can not be empty.';
			die;
		}
		else{
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

			return $response;
		}			
	}

}


?>