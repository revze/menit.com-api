<?php
if (isset($_GET["username"]) && isset($_GET["password"])) {
  $username = $_GET["username"];
  $password = $_GET["password"];

  if ($username == "revan" && $password == "revan123") {
    $data = ["name" => "Revando", "username" => "revan", "location" => "Jakarta Timur"];
    $response = array("status" => "ok", "accessTime" => time(), "data" => $data);
    echo json_encode($response);
  }
  else {
    $data = ["message" => "Username or password is wrong!"];
    $response = array("status" => "ok", "accessTime" => time(), "message" => $data);
    echo json_encode($response);
  }
}
else {
  $data = ["message" => "Username or password is wrong!"];
  $response = array("status" => "ok", "accessTime" => time(), "message" => $data);
  echo json_encode($response);
}
?>
