<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once('functions.php');
	$api_key = 'YW1pdEBhY2Nlc3NpbHkuY29tOnJhZTJ6dXl4ZHA=';
	$domain = 'https://api.everxp.com';
	//pattern and lang are required
	$xp_pattern_parameters = array(
		'api_key'=>$api_key,
		'pattern'=> 1, 
		'lang'=> 'en',
		'style'=> '', 
		'pull'=> '', 
		'freshness'=>'',
		'voice'=>'',
		'min_l'=>'',
		'max_l'=>''
	);
	//quote and lang are required
	$xp_quote_parameters = array(
		'api_key'=>$api_key,
		'quote'=> 'Motivational', 
		'lang'=> 'en',
		'style'=> '', 
		'pull'=> '', 
		'freshness'=>'',
		'voice'=>'',
		'min_l'=>'',
		'max_l'=>''
	);
	//time and lang are required
	$xp_time_parameters = array(
		'api_key'=>$api_key,
		'time'=> 2, 
		'lang'=> 'en',
		'style'=> '', 
		'pull'=> '', 
		'freshness'=>'',
		'voice'=>'',
		'min_l'=>'',
		'max_l'=>''
	);
	xp_pattern($xp_pattern_parameters,$domain);
	echo "<br>";
	xp_quote($xp_quote_parameters,$domain);
	echo "<br>";
	xp_time($xp_time_parameters,$domain);
?>