<?php

function getPage() {
	$page = '';

	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];

	} else {
		$page = "home";
	}

	return $page;
}



function isPage($name) {
	if ($_GET["page"] == $name) {
		echo "active";
	}
}




//save data
function saveData($assArr){
// convert to json.
	$json = json_encode($assArr);
// save to json file.
	file_put_contents('game.json', $json);
}



function addGame($game){
// get game list.

	$gameData = getGamesList();


// add $game to game list.

	array_push($gameData, $game);

// save new list. 

	saveData($gameData);
}





//get games List
function getGamesList(){
//get data from json

	
	$json = file_get_contents("game.json");


//convert to PHP array

	$arr = json_decode($json, true);


//return array

	return $arr;

}



//get single game. game detail

function getGame($id){
//Loop through the data. 

	$game_data = getGamesList();

	foreach ($game_data as $game) {

		//check if the id matches game id.

	 	if ($id == $game["id"] ) {

	 	return $game;
	 }
	 }

}

function deleteGame($id) {

	//get game list
	$game_data = getGamesList();

	//find the game with id
		//loop game data
		foreach ($game_data as $positionInArr => $game){

			//check if match
			if ($id == $game["id"] ) {

				//remove game from game data

				array_splice($game_data, $positionInArr, 1);

				//save new game data arr to json
				
				saveData($game_data);
			}

		}
		
	
	






}

