<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Record System</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-dark">
      <a href="index.php">Student Record System</a>
    </nav>

    <div class="main-header">
      <div class="insert-new">
        <h1>Edit Student Details</h1>
        <div class="form">
          <form action="edit.php" method="POST">
            <?php
            $std_id = $_GET['std_id'];
            $query = "SELECT * FROM `student_info_tbl` WHERE `std_id`='$std_id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <!-- Student Roll Number -->

            <input type="hidden" id="std_id" name="std_id" value="<?= $std_id ?>" required>

            <div class="form-control">
              <input type="text" id="std_first_name" name="std_first_name" placeholder="Enter Student First Name"
                value="<?= $row['std_first_name'] ?>" required>
            </div>

            <!-- Student Last Name -->
            <div class="form-control">
              <input type="text" id="std_last_name" name="std_last_name" placeholder="Enter Student Last Name"
                value="<?= $row['std_last_name'] ?>" required>
            </div>

            <!-- Student Roll Number -->
            <div class="form-control">
              <input type="number" id="std_phone_no" name="std_phone_no" placeholder="Enter Student Phone Number"
                value="<?= $row['std_phone_no'] ?>" required>
            </div>

            <!-- Student Email -->
            <div class="form-control">
              <input type="email" id="std_email" name="std_email" placeholder="Enter Student Email"
                value="<?= $row['std_email'] ?>" required>
            </div>

            <!-- Student Total Marks -->
            <div class="form-control">
              <input type="number" id="std_total_marks" name="std_total_marks" placeholder="Enter Student Total Marks"
                value="<?= $row['std_total_marks'] ?>" required>
            </div>

            <!-- Submit -->
            <div class="footer">
              <div class="form-control">
                <input type="submit" id="save" value="edit" name="edit" onclick="validation()">
                <input type="button" id="clear" value="Clear" onclick="clearInputs()">
              </div>
            </div>

          </form>
        </div>
      </div>

      <div class="display-all">
        <table>
          <tr class="table-head">
            <th>Roll Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Total Marks</th>
            <th>Action</th>
          </tr>
          <?php
          $query = "SELECT * FROM `student_info_tbl`";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?= $row['std_id'] ?></td>
            <td><?= $row['std_first_name'] ?></td>
            <td><?= $row['std_last_name'] ?></td>
            <td><?= $row['std_phone_no'] ?></td>
            <td><?= $row['std_email'] ?></td>
            <td><?= $row['std_total_marks'] ?></td>
            <td>
              <a href=" edit.php?std_id=<?= $row['std_id'] ?>" class="action">Edit</a>
              <a href="delete.php?std_id=<?= $row['std_id'] ?>" onclick="return confirm('Are You Sure')"
                class="action">Delete</a>
            </td>
          </tr>
          <?php }
          if (!mysqli_num_rows($result)) {
            echo "<td colspan='7' style='text-align:center;'>No Record Found</td>";
          } ?>
        </table>
      </div>
    </div>
  </div>

  <div class="topper">
    <h2>Class Topper</h2>

    <table>
      <tr class="">
        <th>Roll Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Total Marks</th>
      </tr>
      <?php
      $query = "SELECT *  FROM `student_info_tbl` ORDER BY `std_total_marks` DESC LIMIT 1";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      ?>
      <tr>
        <td><?= $row['std_id'] ?></td>
        <td><?= $row['std_first_name'] ?></td>
        <td><?= $row['std_last_name'] ?></td>
        <td><?= $row['std_phone_no'] ?></td>
        <td><?= $row['std_email'] ?></td>
        <td><?= $row['std_total_marks'] ?></td>

      </tr>
      <?php
      if (!mysqli_num_rows($result)) {
        echo "<td colspan='7' style='text-align:center;'>No Record Found</td>";
      } ?>
    </table>
  </div>
  </div>



  <footer>
    <div class="team">
      <h3>Team Members</h3>
      <ul>
        <li>> Anees</li>
        <li>> Nazima</li>
        <li>> Shugufta</li>
        <li>> Zuhaib</li>
      </ul>
    </div>

    <div class="team operations">
      <h3>You can</h3>
      <ul>
        <li>> Add Student</li>
        <li>> Remove Student</li>
        <li>> Update Student</li>
        <li>> View Student</li>
      </ul>
    </div>

    <div class="social-media">
      <a href="">Facebook</a>
      <a href="">Instagram</a>
      <a href="">Twitter</a>
      <a href="">LinkedIn</a>
      <div class="mca">MCA SECOND SEMESTER</div>
    </div>
  </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>