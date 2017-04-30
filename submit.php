<?php 

  session_start();
  $fname=$_SESSION['fname'];
  $user=$_SESSION['user'];
  if($user=="")
  {
    header("Location: index.php");
  }
  
  if(isset($_POST['submit'] )){
    $name = ($_POST['usr']);
    $roll = ($_POST['roll']);
    $course = ($_POST['course']);
    $branch = ($_POST['branch']);
    $address = ($_POST['address']);
    $mail = ($_POST['mail']);
    $contact = ($_POST['contact']);
    $placed = ($_POST['placed']);
    $placedloc = ($_POST['placeloc']);
    $fb = ($_POST['fb']);
    $linkedin = ($_POST['linkedin']);
  }
  
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alumni";
    $tbname = "alumni";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    date_default_timezone_set('Asia/Calcutta');
    $date = date('Y/m/d H:i:s');
    $sql = "INSERT INTO alumni (enrollment ,name, date, course, branch, address, email, contact, placement, placedlocation, facebook, linkedin) VALUES ('$user', '$fname', '$date', '$course', '$branch', '$address', '$mail', '$contact', '$placed', '$placedloc', '$fb', '$linkedin' )";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("Data saved Successfully. Go back")';
      echo '</script>';   
      header("Refresh: 1; url=index.php"); 
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Oops! Error, Try again")';
      echo '</script>';   
      header("Refresh: 1; url=index.php");
    }
    $conn->close();
?>
