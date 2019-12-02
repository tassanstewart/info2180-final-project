<?php

/*Group Members:
--Tassan Stewart 620108238
--Tonian Hyman 620108397
--Abigail Miles 620097489 */



  $host = getenv('IP');
  $username = 'final_project';
  $password = 'finals';
  $dbname = 'schema';
  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

  session_start();
    if(!isset($_SESSION["email"])) {
    header("Location: login.html");
    }  


if ( isset( $_POST['user'] )){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO Users (firstname, lastname, password, email) VALUES ($fname, $lname, $password, $email)";
    mysqli_query($conn, $sql);}

?>


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
 </head>
  
  
  <article id="content">
    <form method="post" name="form" id="form" action="newIssue.php" >
    <h2>New User</h2>
    <label for="fname">First Name</label><br>
    <input type="text" name="fname"><br>
    
    <label for="lname">Last Name</label><br>
    <input type="text" name="lname"><br>
    
    <label for="password">Password</label><br>
    <input type="text" name="password"><br>
   
    <label for="email">Email</label><br>
    <input type="text" name="email"><br>
    
    <input id="user" type="submit" value="Submit">
  </form>
  
  </article>
</html>