<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="logo.css">
</head>
<body>
    <div class="text">
    <h1>EditProfile</h1>
    </div>
        <div  class="login">
            <form method="Post">
                Name:<input type="text" name="name" placeholder="name"><br>
                <?php
                 $b=$_SESSION['n'];
                 echo "E-mail:<input type='text' name='email' value='$b' ><br>";?>
                Address:<input type="text" name="add" placeholder="Address"><br>
                Password:<input type="password" name="pass" placeholder="password"><br>
                Conform Password<input type="password" name="pa" placeholder="conform password"><br>
                Mobile no<input type="text" name="p" placeholder="phno"><br>
                <input type="submit" name="submit" value="submit">   
            </form>
        </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    
$servername="localhost";
$username="root";
$password="";
$db="student";
$con=new mysqli($servername,$username,$password,$db);
if($con->connect_error)
{
die("connecion error".$con->connect_error);
}

$name=$_POST['name'];
$phno=$_POST['p'];
$user=$_SESSION['n'];
$pass=$_POST['pass'];
$add=$_POST['add'];
$sql="UPDATE app set phno='$phno',name='$name',password='$pass',address='$add' where username='$user'";
if($con->query($sql)===True)
{
echo "<p style='position:absolute;top:550px; left:550px; color:green;'>successfully Updated</p>";
$_SESSION['n']=$name;
}
$con->close();
}
