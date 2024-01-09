<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "animehub";
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);


$query = "SELECT * FROM categories";
$result = mysqli_query($conn, $query);

$categories = array();
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row['category_name'];
}

echo json_encode($categories);
?>
