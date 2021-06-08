<?php
session_start();
$servername="localhost";
$user="root";
$password="";
$db="student";
echo "<body style='background:#585e3494;'>";
$con=new mysqli($servername,$user,$password,$db);
if($con->connect_error)
{
    die("connection failed");
}
$us=$_SESSION['n'];
$s1="select * from messeges where name='$us'";
$r=$con->query($s1);
$re=mysqli_fetch_array($r);
$count=mysqli_num_rows($r);
echo "<p style='position:absolute; left:900px; font-size:20px; '>";
while($re=$r->fetch_assoc())
{
    echo $re['messege']."                                                 |from:".$re['name'];
    echo "<br><br>";
}
echo "</p>";
?>
<html>
<body>
<center>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<form method="post">
<input type="text" name="m1" placeholder="messege"><br><br>
To:<input type="text" name="username" placeholder="username">
<input type="submit" name="Send"  value="Send" >
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['Send']))
{
$servername="localhost";
$user="root";
$password="";
$db="student";
echo "<body style='background:#585e3494;'>";
$con=new mysqli($servername,$user,$password,$db);
if($con->connect_error)
{
    die("connection failed");
}
$mes=$_POST['m1'];
$user=$_POST['username'];
if($user!=$_SESSION['n'])
{
$sql="insert into messeges values('$mes','$user')";
$res=$con->query($sql);
if($res===TRUE)
{
    echo "<center>Messge send<br></center>";
}
}
else{
    echo "messege cannot be send to your self";
}
}
?>