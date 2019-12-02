<?php

/*Group Members:
--Tassan Stewart 620108238
--Tonian Hyman 620108397
--Abigail Miles 620097489*/


$host = getenv('IP');
$username = 'final_project';
$password = 'finals';
$dbname = 'schema';
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


session_start();

if(isset($_SESSION["email"])) 
{
header("Location: ../home.php");
}

if ( isset( $_POST['login'] ))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    userLogin($email,$password);
}


function userLogin($email,$password)
{
    if(!(checkLogin($email,$password)))
    {
        echo "Login Failed!";
        return false;
    }
}


function checkLogin($email,$password)
{
    $connect = new PDO('mysql:host=localhost;dbname=schema;', 'root', 'password');
    $loginQuery = "SELECT `ID`, `firstname`, `lastname` FROM `Users` WHERE `username`='$email'";
    $stmt = $connect->query($loginQuery);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $_SESSION["email"] = $result['ID'];
        $_SESSION["firstname"] = $result['firstname'];
        $_SESSION["lastname"] = $result['lastname'];
        header("Location: ../home.php");
    }
    else 
    {
        return false;
    }
    
}


?>


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
 </head>
  
  <div class='container'>
  <header>
    <div class='flexbox-container'>
    <h1>BugMe Issue Tracker
    </h1>
  </div>
  </header>
  <body id="page">
  
  <article id="content">
    <form method="post" name="form" id="form" action="login.php" >
    <h2>Login</h2>
    <label for="email">Email:</label><br>
    <input type="text" name="email" size="40"><br />
    <br>
    <label for="email">Password:</label><br>
    <input type="text" name="password" size="20"><br>
    
    <input id="login" type="submit" value="Log in">
    </form>
  </article>
  </body>
    </div>
</html>