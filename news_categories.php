<?php
$data = [];
  array_push($data, ["category" => "News", "url" => "https://cdn-icons-png.flaticon.com/512/81/81460.png"]);
  array_push($data, ["category" => "Sport", "url" => "https://cdn-icons-png.flaticon.com/512/763/763965.png"]);
  array_push($data, ["category" => "Finance", "url" => "https://cdn-icons-png.flaticon.com/512/3594/3594449.png"]);
  array_push($data, ["category" => "Automotive", "url" => "https://cdn-icons-png.flaticon.com/512/3202/3202926.png"]);
  array_push($data, ["category" => "Food", "url" => "https://cdn-icons-png.flaticon.com/512/2033/2033308.png"]);
  array_push($data, ["category" => "Internet", "url" => "https://cdn-icons-png.flaticon.com/512/364/364089.png"]);
  array_push($data, ["category" => "Health", "url" => "https://cdn-icons-png.flaticon.com/512/2966/2966334.png"]);
  array_push($data, ["category" => "Education", "url" => "https://cdn-icons-png.flaticon.com/512/1940/1940611.png"]);
  array_push($data, ["category" => "Gossip", "url" => "https://cdn-icons-png.flaticon.com/512/2846/2846333.png"]);

$response = array("status" => "ok", "accessTime" => time(), "data" => $data);
echo json_encode($response);
?>
