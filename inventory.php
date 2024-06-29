<?php
if(!isset($_GET["username"]))
{
    header('Location: ./index.php');
    exit();
}
else
{
  require_once('./inc/dbinfo.inc');

  $conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

  if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

  $query = "SELECT * FROM users WHERE name='". $_GET['userName'] ."';";
  $response = $conn->query($query);

  if ($response->num_rows == 0)
  {
    $query = "INSERT INTO users (name) values ('". $_GET['userName'] ."')";
    $response = $conn->query($query);
  }
}
if(isset($_GET['itemType']) and !isset($_GET['itemName']) and !isset($_GET['itemQuantity']))
{
  $query = "SELECT name, quantity FROM items WHERE userID='". $_GET['userName'] ."';";
  $response = $conn->query($query);
  echo json_encode($response);
}
else if(!isset($_GET['itemName']) or !isset($_GET['itemType']) or !isset($_GET['itemQuantity']))
{
  header('Location: ./index.php');
  exit();
}
else
{
  require_once('./inc/dbinfo.inc');

  $conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

  if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

  $query = "INSERT INTO items (userID, type, name, quantity) VALUES ((SELECT ID from users where name='". $_GET["username"] ."'), '". $_GET['itemType'] ."', '". $_GET['itemName'] ."', '". $_GET['itemQuantity'] ."');";
  $conn->query($query);
}



  
