<?php
require 'connect.php';
$sql = connect_db(); //
function search_profiles($search_text) {
	global $sql;
	$search_text = str_replace('%', '', $search_text);
	$stmt = "SELECT name AS result FROM user WHERE name LIKE '%$search_text%'
	UNION
	SELECT username AS result FROM user WHERE username LIKE '%$search_text%'
	UNION
	SELECT hashtag AS result FROM hashtag WHERE hashtag LIKE '%$search_text%'";
	$result = $sql->query($stmt);
	$search_results = array();
	if ($result->rowCount() > 0) {
		while($row = $result->fetch()) {
			$search_results[] = $row;
		}
	}
	return $search_results;
}



