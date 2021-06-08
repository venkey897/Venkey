<html>
<head>
<style>
    body
{
margin:0;
padding:0;
font-family:sans-serif;
background:#ABEBC6;
}
.box{
width:300px;
padding:100px;
position:absolute;
top:20%;
left:30%;
transform:transform(-50%,-%50);
background:#566573;
text-align:center;
}
.box input[type="text"],.box input[type="password"]{
boarder:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
boarder:2px solid #3498db;
padding:14px 10px;
width:200px;
outline:none;
color:white;
boarder-radius:24px;
transition:0.25s;
}

.box input[type="submit"]{
boarder:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
boarder:2px solid #3498db;
padding:14px 10px;
width:80px;
outline:none;
color:white;			
boarder-radius:24px;
transition:0.25s;
}
.box input[type="submit"]:hover{
background:#2ecc71;
}
.box input[type="logout"]:hover{
background:#2ecc71;
}
</style>
</head>
<body>
<form name="my" class="box"  method="post">
<h1>
Login
</h1>
<input type="text" id="n" name='n' placeholder="username">
<input type="password" name='p' placeholder="password">
<input type="submit" name="submit" value="submit" >
<a href="forgot.php">forgotpassword</a><br><br>
Don't have Account<a href='loginpage.php'>signup here</a>
</form>
</body>
<?php
session_start();
if(isset($_POST['submit'])) 
{   $servername="localhost";
    $username="root";
    $password="";
    $db="student";
    $con=new mysqli($servername,$username,$password,$db);
    if($con->connect_error)
    {
    die ("connection failed");
    }
    $user=$_POST['n'];
    $pass=$_POST['p'];
    $sql="select * from app where username='$user' and password='$pass' limit 1";
    
    $res=$con->query($sql);
    $row=mysqli_fetch_array($res);
    $count=mysqli_num_rows($res);
    if($count==1)
    {
        $_SESSION['n']=$row['username'];
        $_SESSION['p']=$row['password'];
        $_SESSION['k']=$row['name'];
    }
    else
    {
    
        echo "please register here<a href='loginpage.php'>click here</a>";
    }
    if(isset($_SESSION['n']))
    {
        header("Location:App.php");
    }
    $con->close();
}
?>
</html>