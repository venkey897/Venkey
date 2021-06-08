<html>
<head>
<style>
body
{
margin:0;
padding:0;
top:100px;
background:#585e3494;
}
.box{
    position:absolute;
    left:500px;
}
.box1{
    position:absolute;
    left:600px;
    font-size:22px;
    color:blue;
}
.box input[type="submit"]:hover{
background:rgb(11, 69, 228);;
</style>
</head>
</html>
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
$sql="select name,username from app where username!='$p'";
$res=$con->query($sql);
echo "<h1 style='position:absolute;top:20px;left:500px;background-color: #00e1ff'>Click on friend to make friend</h1>";
echo "<br><br><br><br><br><br><br>";
if(mysqli_num_rows($res)>0)
{
    echo "<ol>";
while($count=mysqli_fetch_array($res))
{
    $m=$count['name'];
    echo "<form method='post'><li><input type='submit' id='$m' name='follow' value='$m'></li></form><br><br>";    
}
echo "</ol>";
}

if(isset($_POST['follow']))
{
    $m=$_POST['follow'];
    $s=$_SESSION['n'];
    $p='follow';
    $sql=("insert into friends values('$m','$s','$p')");
    $z=$con->query($sql);
        if($z===TRUE)
        {
            echo "<p style='position:absolute;left:500px;font-size:20px;color:blue'>he is your friend</p>";
        }
        else{
            $m=$_POST['follow'];
    $sql=("DELETE from friends where name='$m'");
    $z=$con->query($sql);
    if($z===TRUE)
    {
        echo "<p style='position:absolute;left:500px;font-size:20px;color:red'>your unfollowing</p>";
    
        }


}   
}
?>