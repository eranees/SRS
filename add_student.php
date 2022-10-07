<?php
include("connection.php");
if (isset($_POST['save'])) {
  $std_first_name = $_POST['std_first_name'];
  $std_last_name = $_POST['std_last_name'];
  $std_phone_no = $_POST['std_phone_no'];
  $std_email = $_POST['std_email'];
  $std_total_marks = ($_POST['std_total_marks']);
  if ($std_total_marks > 500) {
    echo "
    <script>
      alert('Invalid Marks');
      window.location.href = 'index.php';
    </script>
  ";
  }
  $query = "INSERT INTO `student_info_tbl` (`std_first_name`, `std_last_name`, `std_phone_no`, `std_email`, `std_total_marks`) VALUES ('$std_first_name', '$std_last_name', '$std_phone_no', '$std_email', '$std_total_marks')";
  if (mysqli_query($conn, $query)) {
    echo "
    <script>
      alert('Student Inserted Successfully!');
      window.location.href = 'index.php';
    </script>
  ";
  } else {
    echo "
    <script>
      alert('Error While Inserting New Student.');
      window.location.href = 'index.php';
    </script>
  ";
  }
} else {
  header("Location:index.php");
}