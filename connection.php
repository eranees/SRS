<?php
$db_server_address = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "srs_db";

// Connect to MySQL
$conn = mysqli_connect($db_server_address, $db_username, $db_password);
if (!$conn) {
  die('Could not connect');
}

// Make my_db the current database
$db_selected = mysqli_select_db($conn, $db_name);

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  $sql = 'CREATE DATABASE $db_name';
  if (mysqli_query($conn, $sql)) {
    echo "Database" . $db_name . "created successfully";
  } else {
    echo 'Error creating database: ' . mysqli_error($conn) . "<br>";
  }
}

// creating table if table does not exist

$query = "SELECT std_id FROM student_info_tbl";
$result = mysqli_query($conn, $query);
if (empty($result)) {
  $create_table = "
  CREATE TABLE `student_info_tbl` (
  `std_id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `std_first_name` varchar(100) NOT NULL,
  `std_last_name` varchar(100) NOT NULL,
  `std_phone_no` varchar(13) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_total_marks` int(11) DEFAULT 0,
  `std_doc` datetime NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
  if (mysqli_query($conn, $create_table)) {
    echo "Table student_info_tbl created successfully";
  } else {
    echo 'Error creating database table : ' . mysqli_error($conn) . "<br>";
  }
}
// mysqli_close($conn);