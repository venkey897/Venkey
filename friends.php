<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$db="student";
$con=new mysqli($servername,$username,$password,$db);
if($con->connect_error)
{
die("connecion error".$con->connect_error);
}
$p=$_SESSION['n'];
$sql="select * from friends  where username='$p'";
$res=$con->query($sql);
echo "<h1 style='position:absolute;top:20px;left:500px;background-color: #00e1ff'>Your friends</h1>";
echo "<h2 style='position:absolute;top:90px;left:400px; width:400px;'>";
if(mysqli_num_rows($res)>0){
while($count=mysqli_fetch_array($res))
{
echo $count['name']."<a href='messge.php'>messege</a><br>";

echo "</form>";
}
echo "</h2>";
echo "</body>";
}

?>