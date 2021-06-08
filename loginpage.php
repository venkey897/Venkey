<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="logo.css">
</head>
<body>
    <div class="text">
    <h1>Signup</h1>
    </div>
        <div  class="login">
            <form method="Post" onClick="fun()">
                Name:<input type="text" name="n" placeholder="name"><br>
                E-mail:<input type="text" name="ema" placeholder="username"><br>
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

$name=$_POST['n'];
$ph=$_POST['p'];
$user=$_POST['ema'];
$pass=$_POST['pass'];
$pa=$_POST['pa'];
$add=$_POST['add'];
$sql="insert into app values('$name','$user','$pass','$ph','$add')";
if($con->query($sql)===True)
{
echo "<p style='position:absolute;top:550px; left:550px; color:green;'>successfully created your account</p><br><a style='position:absolute;top:554px; left:550px; color:blue;' href='login2.php'>loginhere</a>";
echo "<script type='text/javascript>document.location='login2.php'><script>";
}
else{
    echo "<p style='position:absolute;top:550px; left:50px; color:red;'>already exist in this username change your username</p>";
}
$con->close();
}
?>