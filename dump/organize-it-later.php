<?php

/**
 * Simple formated json_encode output
 *
 * @param type $object
 * @return $formatedJSON json_encode formated
 */
function json_formated($object) {
	$formatedJSON = json_encode($object);
	$formatedJSON = str_replace(',',",\n\t", $formatedJSON);
	$formatedJSON = str_replace('{',"{\n\t", $formatedJSON);
	$formatedJSON = str_replace('}',"\n}", $formatedJSON);
	return $formatedJSON;
}

/**
 * Simple way to get  $_POST or $_GET, urldecode
 * 
 * @param string Name of param to take from $_POST or $_GET
 * @param mixed $default Default value if is not defined
 * @return string 
 */
function param($name, $default = NULL) {
	if (isset($_POST[$name])) {
		return urldecode($_POST[$name]);
	} elseif (isset($_GET[$name])) {
		return urldecode($_GET[$name]);
	} else {
		return $default;
	}
}

/**
 * Run one $query on SQLite3 database in current directory using PDO
 *
 * @param string $query to run on database
 * @return array of database rows 
 */
function getData($query) {
	try {
		$db = new PDO('sqlite:data.db3'); //Access existent data.db3 on current directory, or create one
	} catch (Exception $e) {
		die($error);
	}
	$result = $db->query($query);
	$rowarray = $result->fetchall(PDO::FETCH_ASSOC);
	return $rowarray;
}