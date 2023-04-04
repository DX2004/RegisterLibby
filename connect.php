<head>
<script language="javascript" type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
        </script>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="hotel management system";


$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("Connection failed !: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
  $name = $_POST["name"];
  $enrollment = $_POST["enrollment"];
  $department = $_POST["department"];
  $email = $_POST["email"];
  $phoneno = $_POST["phoneno"];
  $address=$_POST["address"];
  $year=$_POST["year"];

$checkuser = "SELECT * FROM student_register WHERE enrollment='$enrollment' OR email='$email' OR phoneno='$phoneno'";
$result = mysqli_query($conn, $checkuser);
if(mysqli_num_rows($result) > 0){
  echo '<script language="javascript">';
  echo 'alert("Enrollment or Email or PhoneNo Already Exists !!");';
  echo 'window.location = "registerstudent.php"';
  echo '</script>';
} else{
  $query = "INSERT INTO student_register
            VALUES('','$name', '$enrollment', '$department', '$email','$phoneno','$address','$year')";
  if(mysqli_query($conn, $query)){
    header("Location:thankyou1.php");
  }
}

}
?>
