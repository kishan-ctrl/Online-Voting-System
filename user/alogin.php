<?php 
$host="localhost";
$user="root";
$password= "";
$db="admin";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from login where username= '".$username. "'AND password='".$password."' ";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if(isset($row["usertype"]) && $row["usertype"] == "admin"){
        header("location:imo.php");
    }
    else{
        echo "<h2>UNAUTHORISED ENTRY</h2>";
    }
}

?>

<html>
    <head>
        <title></title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="c.css">

    </head>

    <body>
    
            
    
    <div class="login-container">  
        <h3>Authorised Login Only</h3>      
    <form action="#" method="POST">
                
        <div class="input-box">
            <label>username</label>
            <input  class="label" type="text" name="username" required><br>
        </div>

        <div class="input-box">
            <label>password</label>
            <input class="label" type="password" name="password" required><br>
        
        <button type="submit">Login</button>
        <div>
      
            </form>
    </div>
    
    

    </body>
</html>