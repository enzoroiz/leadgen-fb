<?php

error_log("Requisição realizada");
$challenge = $_REQUEST['hub_challenge'];
error_log($challenge);
$verify_token = $_REQUEST['hub_verify_token'];
error_log($verify_token);
if ($verify_token === 'jcleadgen#2017') {
	error_log('Token verified');
	echo $challenge;
}

error_log("Writing to log file");
$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));