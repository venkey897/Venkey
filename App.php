<?php
session_start();
?>
<html>
<head><link rel="stylesheet" href="logins.css">
<h1 style="position:relative; top:20px;font-size:6.01em;left:400px;color:crimson">Cloud net</h1>
</head>
<body>
<div class="text">
      <?php
      if(empty($_SESSION['n']))
      { 
      echo "<h1><marquee direction='right'>Welcome Guest&emsp;</h1>";
      }
      if(!empty($_SESSION['n']))
      {
      echo "<h2><marquee direction='right'>Logged in as:".$_SESSION['k']."</h2>";
      }?></marquee>
</div>.
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<center>
    <form method="post" action="login2.php">
    <div class="home"><a href="App.php">Home|</a>&emsp;
    <?php
    if(empty($_SESSION['n']))
    {
    
     echo "<a href='login2.php'>Login</a>&emsp;";
     echo "<a href='loginpage.php'>Sign up</a>";
    }
    if(!empty($_SESSION['n']))
    {
        echo "<a href='members.php'>members</a>|&ensp;";
        echo "<a href='friends.php' >Friends</a>";
        echo "<br><br><br>&ensp;<a href='messge.php'>Messeges</a>|&ensp;";
        echo "<a href='editpge.php'>Edit profile</a>|&ensp;&ensp;&ensp;&ensp;<br><br><br><a href='logout.php'>logout</a>&ensp;";
    }
    ?>
    </div></form>
</center>
</body>
</html>