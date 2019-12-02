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
    //header("Location: login.html");
    }  


if ( isset( $_POST['submit_issue'] )){
    $title = $_POST['title'];
    $descrip = $_POST['password'];
    $assign = $_POST['assign'];
    $type = $_POST['type'];
    $priority = $_POST['priority'];
    
    $sql = "INSERT INTO Issues (title, description, type, priority, assigned_to) VALUES ($title, $descrip, $type, $prioriy, $assign)";
    mysqli_query($conn, $sql);}
    


?>


<!DOCTYPE html>
<html lang='en'>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
 </head>
  
  
  <article>
  <form method="post" name="form" id="form" action="createIssue.php" >
  
    <h2>Issues</h2>
    <p1></p1>
    <label for="title">Title</label><br>
    <input type="text" name="title"><br>
    <label for="descrip">Description</label><br>
    <input id="descrip" type="text" name="descrip">
    <br>
    <label for="assign">Assigned to</label><br>
    <select id="assign">
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
    </select><br>
    <label for="type">Type</label><br>
    <select id="type">
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
    </select><br>
    
    <label for="priority">Priority</label><br>
    <select id="priority">
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
    </select><br>
    <input id="submit_issue" type="submit" value="Submit">
    </form>
  </article>
  
</html>