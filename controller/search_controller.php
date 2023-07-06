<?php
include_once  '../model/search_model.php';
$search_text = isset($_POST['search_text']) ? $_POST['search_text'] : '';
$search_results = search_profiles($search_text);
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
	include_once '../view/home.php';
} else {
	echo json_encode($search_results);
}


?>

