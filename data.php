<?php
$data = json_decode($_POST["data"]);

require_once('./inc/dbinfo.inc');
session_start();

$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$query = "INSERT INTO users (first_name, last_name, phone, mail, origin, city, state, zip )".
"values ('${data['firstname']}', '${data['lastname']}', '${data['phone']}', '${data['mail']}','${data['address']}', '${data['city']}', '${data['state']}','${data['zip']}')". 
"where name='${_POST['userName']}'";

$response = $conn->query($query);

var_dump($response);