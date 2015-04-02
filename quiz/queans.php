<html>
<head>
<title> Process</title>
</head>
</body>




<?php
session_start();

$user= "root";
$password = "";
$host="localhost";
$database="civquiz";


$cxn = mysqli_connect($host, $user, $password, $database);

?>

<form action='scorecheck.php' method='post'>
q1.sifjasfijasfklsajflkasjf<br/>
 <input type='text' name='ans' value=''> <br/>
 </form>
 
 <form action='scorecheck.php' method='post'>
q2.sifjasfijasfklsajflkasjf<br/>
 <input type='text' name='ans' value=''> <br/>
 </form>

 <form action='scorecheck.php' method='post'>
q3.sifjasfijasfklsajflkasjf<br/>
 <input type='text' name='ans' value=''> <br/>
 </form>


<?php
echo "your score:";

$username=$_SESSION['myusername'];
$sql="select * from score1 where uname='$username'";
  $result= mysqli_query($cxn,$sql);
  
  $score= mysqli_num_rows($result);
echo $score;
?>
  


</body>

</html>