<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "animehub";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$currentIndex = $_GET['currentIndex'];
$direction = $_GET['direction'];
if ($direction === 'next') {
    $query = "SELECT a.*, GROUP_CONCAT(c.category_name SEPARATOR ', ') as category_names 
              FROM animes a 
              LEFT JOIN anime_categories ac ON a.anime_id = ac.anime_id 
              LEFT JOIN categories c ON ac.category_id = c.category_id 
              WHERE a.anime_id > $currentIndex 
              GROUP BY a.anime_id 
              ORDER BY a.anime_id ASC LIMIT 1";
} else if ($direction === 'prev') {
    $query = "SELECT a.*, GROUP_CONCAT(c.category_name SEPARATOR ', ') as category_names 
              FROM animes a 
              LEFT JOIN anime_categories ac ON a.anime_id = ac.anime_id 
              LEFT JOIN categories c ON ac.category_id = c.category_id 
              WHERE a.anime_id < $currentIndex 
              GROUP BY a.anime_id 
              ORDER BY a.anime_id DESC LIMIT 1";
}

$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    echo "Error fetching random anime details: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
