<?php session_start(); ?>

<html>
<head>
<title> Process</title>
</head>
</body>
<?php


$user= "root";
$password = "";
$host="localhost";
$database="civquiz";


$cxn = mysqli_connect($host, $user, $password, $database);

$ans= array("one","two","three");

$username= $_SESSION['myusername'];
echo $ans[0];
echo $_POST['ans'];
echo "<br/>";
$p=strcmp($_POST['ans'], $ans[0]);

/*$sql="select * where uname=".$_SESSION['myusername'];
  $result= mysqli_query($cxn,$sql);
  $row = mysqli_fetch_assoc($result);
  echo $row['uid'];
  */  
  
  $m=0;
for($i=0;$i<3;$i++)
{
 if(strcmp($_POST['ans'], $ans[$i])==0)
  {
  $m=1;
  $jno=$i+1;
  
  $sql="select * from score1 where uname= '$username' AND qno='$jno'";
  $result= mysqli_query($cxn,$sql);
  
  
  if(!mysqli_num_rows($result))
  {$sql="INSERT INTO score1 VALUES ('{$_SESSION['myusername']}', '{$jno}')";
  $result= mysqli_query($cxn,$sql);
  echo "right";
  
  }
  else
  echo "already answered";
  }
    
}

if($m==0) echo "wrong answer";


?>


<br/>
<a href = "queans.php" ? id=1> BACK <a/>


  


</body>

</html>