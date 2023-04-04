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
  $unique = $_POST["unique"];
  $department = $_POST["department"];
  $email = $_POST["email"];
  $phoneno = $_POST["phoneno"];
  $address=$_POST["address"];
  $teacher=$_POST["teacher"];

$checkuser = "SELECT * FROM staff_register WHERE uniquee='$unique' OR email='$email' OR phoneno='$phoneno'";
$result = mysqli_query($conn, $checkuser);
if(mysqli_num_rows($result) > 0){
  echo '<script language="javascript">';
  echo 'alert("Unique No or Email or PhoneNo Already Exists !!");';
  echo 'window.location = "registerstaff.php"';
  echo '</script>';
} else{
  $query = "INSERT INTO staff_register
            VALUES('','$name', '$unique', '$department', '$email','$phoneno','$address','$teacher')";
  if(mysqli_query($conn, $query)){
    header("Location:thankyou1.php");
  }
}

}
?>
