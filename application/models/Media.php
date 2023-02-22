<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Media extends CI_Model{

	function __construct(){
		// $this->load->helper(array('form', 'url', 'file'));
		// ini_set('memory_limit', '1000M');
		// ini_set('max_execution_time', 1200);
		// $this->load->database();
	}


	function latest_post($limit=10){
		$url = "https://media.maritimmuda.id/";
		$url .= "ghost/api/v2/content/posts/?key=";
		$token = "a7de61c9ad82d27914325437a8";
		$url = $url.$token."&limit=".$limit;

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_HTTPHEADER => array(
			    "cache-control: no-cache"
			),
		));
		try {
			$response = curl_exec($curl);
		} catch (Exception $e) {
			$response = '';
		}
		$err = curl_error($curl);
		curl_close($curl);
		$response= json_decode($response);
		// print_r($response);
		$berita = array();
		if (is_array($response->posts)) {
			foreach ($response->posts as $value) {
				$push['id']=$value->id;
				$push['url']=$value->url;
				$push['title']=$value->title;
				$push['published_at']=$value->published_at;
				array_push($berita, $push);
			}
		} else {
			$berita = array();
		}
		return $berita;
	}
}

?>
