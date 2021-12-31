<?php
$data = [];
  array_push($data, ["title" => "Viral Wanita Isi Bensin Dicurangi Operator SPBU, Pertamina Buka Suara", "url" => "https://images.unsplash.com/photo-1616046913255-344e75b5a21d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1925&q=80"]);
  array_push($data, ["title" => "Piala AFF 2020: Indonesia Tanpa Bomber Maut, Tetap Tokcer kok!", "url" => "https://images.unsplash.com/photo-1640056845138-f00eb95f66ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1975&q=80"]);
  array_push($data, ["title" => "Khabib: Ballon d'Or 2021 Mestinya Jadi Milik Lewandowski", "url" => "https://images.unsplash.com/photo-1639975721126-dec5eaa61c97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"]);
  array_push($data, ["title" => "5 Perbedaan Ancelotti dan Zidane Latih Real Madrid", "url" => "https://images.unsplash.com/photo-1616046913255-344e75b5a21d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1925&q=80"]);
  array_push($data, ["title" => "Rumor Transfer: MU Segera Gaet Pemain Baru, Liverpool Kejar Bek Barca", "url" => "https://images.unsplash.com/photo-1640056845138-f00eb95f66ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1975&q=80"]);
  array_push($data, ["title" => "Cerita Willian: Baru 3 Bulan di Arsenal, Langsung Ingin Cabut", "url" => "https://images.unsplash.com/photo-1639975721126-dec5eaa61c97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"]);

if (isset($_GET["limit"])) {
  $limit = $_GET["limit"];
  if ($limit == '') {
    $result = $data;
  } else {
    $result = array_slice($data, 0, $limit);    
  }
} else {
  $result = $data;
}
$response = array("status" => "ok", "accessTime" => time(), "data" => $result);
echo json_encode($response);
?>
