
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="topBar" class="topBar">
            Quiz
        </div>
        <div id="reg" class="reg">Login</div>
        <div id="wrapper" class="wrapper">
            <div id="innerWrapper" class="innerWrapper">
                <form action="processing2.php" method="post" name="registration_form" id="form" class="form">
                    &nbsp;UserName<br>
                    <input type="text" name="uname" id="name" class="field"><br>                  
                    &nbsp;Password<br>
                    <input type="password" name="pass" id="pass" class="field"><br>
                    <input type="submit" id="Login" class="submit" value="Login"><br>
                </form>
				<br><br><br>
				<form action="register.php" method="post" name="registration_form" id="form" class="form">
				<input type="submit" id="Register" class="submit" value="Register"><br>
				</form>
            </div>
        </div>
    </body>
</html>