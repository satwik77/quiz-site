
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Civil| Quiz</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/importFonts.css" />
	<script src="js/jquery.min.js"></script>
</head>
<body>


<?php
session_start();

$user= "root";
$password = "";
$host="localhost";
$database="civquiz";


$cxn = mysqli_connect($host, $user, $password, $database);

?>




	<div id="blackout" class="blackout">
		<div id="closeBox" class="closeBox">CLOSE</div>
		<div id="blackoutContent" class="blackoutContent">
			<div id="blackoutContentWrapper" class="blackoutContentWrapper"></div>
		</div>
	</div>

	<div id="topBar" class="topBar">
		<div id="head" class="head">Civil<span style="font-weight:100;">Quiz</span></div>
		<div id="topContainer1" class="topContainer1">
		
		<?php

$username=$_SESSION['myusername'];
$sql="select * from score1 where uname='$username'";
  $result= mysqli_query($cxn,$sql);
  
  $score= mysqli_num_rows($result);
echo $score;
?>


</div>
		<div id="topContainer2" class="topContainer2">
			<div id="userName" class="userName" ><span class="ln">Team : </span><br><span class="fn">
			
			<?php echo $username; ?>
			
			
			</span><br></div>
		</div>
	</div>


	<div id="IOWrapper" class="IOWrapper">
		<div id="IOHeader" class="IOHeader">
			<div id="levelBox" class="levelBox"></div>
			<div id="numQuestion" class="numQuestion">Questions</div>
			<div id="flipCheck" class="flipCheck"></div>
			<div id="doubleDipCheck" class="doubleDipCheck"></div>
		</div>


		<div id="IOContent" class="IOContent">
		
	<form action='scorecheck.php' method='post'>
q1.sifjasfijasfklsajflkasjf<br/>
 <input type='text' name='ans' value=''  class="answerBox" id="answerBox"><input type='submit'  class="answerSubmit" id="answerSubmit"><br/>
 </form>
 <br><br>
 <form action='scorecheck.php' method='post'>
q2.sifjasfijasfklsajflkasjf<br/>
 <input type='text' name='ans' value=''  class="answerBox" id="answerBox"><input type='submit'  class="answerSubmit" id="answerSubmit"><br/>
 </form>
<br><br>
 <form action='scorecheck.php' method='post'>
q3.sifjasfijasfklsajflkasjf<br/>
 <input type='text' name='ans' value='' class="answerBox" id="answerBox"><input type='submit'  class="answerSubmit" id="answerSubmit"><br/>
 </form>
	



			
		</div>




	</div>
	<script src="js/main.js"></script>
</body>
</html>
