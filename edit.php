<?php
include("connection.php");
if (isset($_POST['edit'])) {
  $std_id = $_POST['std_id'];
  $std_first_name = $_POST['std_first_name'];
  $std_last_name = $_POST['std_last_name'];
  $std_phone_no = $_POST['std_phone_no'];
  $std_email = $_POST['std_email'];
  $std_total_marks = $_POST['std_total_marks'];
  if ($std_total_marks > 500) {
    echo "
    <script>
      alert('Invalid Marks');
      window.location.href = 'index.php';
    </script>
  ";
  }
  $query = "UPDATE `student_info_tbl` SET `std_first_name`='$std_first_name',`std_last_name`='$std_last_name',`std_phone_no`='$std_phone_no',`std_email`='$std_email',`std_total_marks`='$std_total_marks' WHERE `std_id`='$std_id'";
  if (mysqli_query($conn, $query)) {
    echo "
      <script>
        alert('Student Updated Successfully!');
        window.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Error While Updating Student Information');
        window.location.href = 'index.php';
      </script>
    ";
  }
} else {
  header("Location:index.php");
}