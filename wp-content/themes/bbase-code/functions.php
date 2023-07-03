<?php
/**
 * BBase Code functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BBase_Code
 */

foreach (glob(get_stylesheet_directory()."/inc/*.php") as $filepath){
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating %s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
function theme_js_script() {
	wp_enqueue_script( 'main-sc-script', get_template_directory_uri() . '/assets/js/main-ct.js');
	}
add_action('wp_enqueue_scripts', 'theme_js_script');

function callAPI($method, $url, $data){
	$curl = curl_init();
	switch ($method){
	   case "POST":
		  //curl_setopt($curl, CURLOPT_POST, 1);
		  if ($data)
			 //curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		  break;
	   case "PUT":
		  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
		  if ($data)
			 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
		  break;
	   default:
		  if ($data)
			 $url = sprintf("%s?%s", $url, http_build_query($data));
	}
	// OPTIONS:
	if($method=="POST")
	{
		curl_setopt( $curl, CURLOPT_HEADER, 0);
		curl_setopt( $curl, CURLINFO_HEADER_OUT, 1);
		curl_setopt( $curl, CURLOPT_AUTOREFERER, 1);
		curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0);

		curl_setopt( $curl, CURLOPT_POST, 1);

		
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array('accept: application/json','Content-type: application/json'));
		//curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
		curl_setopt( $curl, CURLOPT_URL, $url);
	
		

	}
	else
	{
		curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	
	}
	
	// EXECUTE:
	$result = curl_exec($curl);
	return $result;

	if(!$result){die("Connection Failure");}
	
	
 }

 function callAPITOKEN($method, $url, $data,$token){
	$curl = curl_init();
	curl_setopt( $curl, CURLOPT_HEADER, 0);
	curl_setopt( $curl, CURLINFO_HEADER_OUT, 1);
	curl_setopt( $curl, CURLOPT_AUTOREFERER, 1);
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0);
	if($method=="POST")
	{
		curl_setopt( $curl, CURLOPT_POST, 0);

	
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data);
	}

	
	curl_setopt( $curl, CURLOPT_HTTPHEADER, array('accept: accept: */*','Authorization: Bearer '.$token));
	//curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
	curl_setopt( $curl, CURLOPT_URL, $url);
	$result = curl_exec($curl);
	return $result;
 }