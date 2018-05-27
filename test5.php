<?php
function get_data()
{
  $connect = mysqli_connect("localhost", "root", "sensation", "capstone");
  $query = "SELECT * FROM gyro";
  $result = mysqli_query($connect, $query);
  $gyro_data = array();
  $users = array();
  while($row = mysqli_fetch_array($result))
  {
    $gyro_data[] = array(
      'id' => $row["id"],
      'title' => $row["title"],
      'description' => $row["description"]
    );
  }
  return json_encode($gyro_data);
}
echo '<pre>';
print_r(get_data());
echo '</pre>';
?>
