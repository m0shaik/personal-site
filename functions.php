<?php 
function getPage(){
	$page = 'home';
	if (isset($_GET['page']) ){
		$page = $_GET['page'];

	}

	return $page;
}

function getJsonData($path){
	$jsonData = file_get_contents("data/$path");

	$convertedJson = json_decode($jsonData, true);

	return $convertedJson;
}

