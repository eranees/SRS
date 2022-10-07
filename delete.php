<?php
include("connection.php");
$std_id = $_GET['std_id'];
$query = "DELETE FROM `student_info_tbl` WHERE `std_id`='$std_id'";
if (mysqli_query($conn, $query)) {
  echo "
    <script>
      alert('Student Deleted Successfully!');
      window.location.href = 'index.php';
    </script>
    ";
} else {
  echo "
  <script>
    alert('Error While Deleting Student');
    window.location.href = 'index.php';
  </script>
  ";
}