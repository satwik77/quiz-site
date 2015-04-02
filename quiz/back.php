<html>
<head>
<title> PROCESS</title>
</head>
</body>
<?php
$uname= $_POST['uname'];
$pass= $_POST['pass'];
$name1= $_POST['pone'];
$name2= $_POST['ptwo'];


$user= "root";
$password = "";
$host="localhost";
$database="civquiz";

$cxn = mysqli_connect($host, $user, $password, $database);

$query= "INSERT INTO users (uname, pass, pone, ptwo) VALUES ('{$uname}', '{$pass}', '{$name1}', '{$name2}')" ;
			
  $res= mysqli_query($cxn, $query);			
 
 if($res)
  {echo "Added Successfully <br/>";}
  else
   {echo "failed";}
   ?>
   <br/>
<a href = "home.php" ? id=1> Back TO Home <a/>



</body>

</html>