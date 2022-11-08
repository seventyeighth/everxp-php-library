<?php

namespace Everxp;

class Everxp
{

	protected $config = [];

    public function __construct($config)
    {
    	$this->config = array_merge($this->config, $config);
        if(!isset($this->config['api_key']))
        {
            return json_encode('EverXP API Key is missing.');
        }

    }

	public function xp_pattern($config)
	{
		$domain = 'https://api.everxp.com';

		if (empty($config))
		{
			return json_encode('Pattern parameters are missing.');
		}

		$config = array_merge($this->config, $config);


		$xp_patters_parameters_string = "$domain/heading/pattern?";
		//Removes empty values from $config array
		$remove_empty = array_filter($config, 'strlen');
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
		if (array_key_exists("heading",$response_decoded))
		{
			return $response_decoded['heading'];
		}
		else
		{
			return $response;
		}

	}
		
		
	public function xp_quote($config)
	{

		$domain = 'https://api.everxp.com';

		if (empty($config))
		{
			return json_encode('Quote parameters are missing.');
		}

		$config = array_merge($this->config, $config);

		$xp_quote_parameters_string = "$domain/heading/quote?";
		
		//Removes empty values from $config array
		$remove_empty = array_filter($config, 'strlen');
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
		if (array_key_exists("heading",$response_decoded))
		{
			return $response_decoded['heading'];
		}
		else
		{
			return $response;
		}

	}

	public function xp_time($config)
	{

		$domain = 'https://api.everxp.com';


		if (empty($config))
		{
			return json_encode('Time parameters are missing..');
		}

		$config = array_merge($this->config, $config);

		$xp_time_parameters_string = "$domain/heading/time?";
		
		//Removes empty values from $config array
		$remove_empty = array_filter($config, 'strlen');
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
		if (array_key_exists("heading",$response_decoded))
		{
			return $response_decoded['heading'];
		}
		else
		{
			return $response;
		}
	
	}

	public function xp_cta($config)
	{
		$domain = 'https://api.everxp.com';

		if (empty($config))
		{
			return json_encode('Pattern parameters are missing.');
		}

		$config = array_merge($this->config, $config);


		$xp_ctas_parameters_string = "$domain/heading/cta?";
		//Removes empty values from $config array
		$remove_empty = array_filter($config, 'strlen');
		$xp_ctas_parameters_string .=  http_build_query($remove_empty);
		
		//curl_init() Initialize a CURL session.
		$ch = curl_init();
		//CURLOPT_URL pass URL as a parameter
		curl_setopt($ch, CURLOPT_URL, "$xp_ctas_parameters_string");
		// Return Page contents. If set false then no output will be returned
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//grab URL and pass it to the variable for showing output
		$response = curl_exec($ch);
		//close curl resource, and free up system resources.
		curl_close($ch);

		$response_decoded = json_decode($response, true);
		if (array_key_exists("heading",$response_decoded))
		{
			return $response_decoded['heading'];
		}
		else
		{
			return $response;
		}

	}

	public function xp_humanitarian($config)
	{
		$domain = 'https://api.everxp.com';

		if (empty($config))
		{
			return json_encode('Pattern parameters are missing.');
		}

		$config = array_merge($this->config, $config);


		$xp_humanitarians_parameters_string = "$domain/heading/humanitarian?";
		//Removes empty values from $config array
		$remove_empty = array_filter($config, 'strlen');
		$xp_humanitarians_parameters_string .=  http_build_query($remove_empty);
		
		//curl_init() Initialize a CURL session.
		$ch = curl_init();
		//CURLOPT_URL pass URL as a parameter
		curl_setopt($ch, CURLOPT_URL, "$xp_humanitarians_parameters_string");
		// Return Page contents. If set false then no output will be returned
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//grab URL and pass it to the variable for showing output
		$response = curl_exec($ch);
		//close curl resource, and free up system resources.
		curl_close($ch);

		$response_decoded = json_decode($response, true);
		if (array_key_exists("heading",$response_decoded))
		{
			return $response_decoded['heading'];
		}
		else
		{
			return $response;
		}

	}


}


?>