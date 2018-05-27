<?php
header('Content-Type: application/json');
$conn = mysqli_connnect("localhost", "root", "sensation", "capstone");
$q = mysqli_query($conn, "SELECT * FROM acceleration");
$json = array();
while($data = mysqli_fetch_assoc($q))
array_push($json, array('t' => $data['title'], 'd' => $data['description']));
echo json_encode(array('users' => $json));
 ?>
