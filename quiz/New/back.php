<html>
<head>
<title> PROCESS</title>
<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/importFonts.css" />
</head>
<body style="background-color: #f1f1f1">

<div style="width:100%; text-align: center; font-size: 40px;"><br/>
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
  {echo "Successfully Registered.";}
  else
   {echo "Invalid information ! Please try again...";}
   ?>
   <br/><br/>
<a href = "home.php" ? id=1> Back TO Home <a/>

</div>

</body>

</html>