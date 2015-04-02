
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="topBar" class="topBar">
            Quiz
        </div>
        <div id="reg" class="reg">Register</div>
        <div id="wrapper" class="wrapper">
            <div id="innerWrapper" class="innerWrapper">
                <form action="back.php" method="post" name="registration_form" id="form" class="form">
                    &nbsp;UserName<br>
                    <input type="text" name="uname" id="name" class="field"><br>
                    &nbsp;First Player<br>
                    <input type="text" name="pone" id="id" class="field"><br>
                    &nbsp;Second Player<br>
                    <input type="text" name="ptwo" id="email" class="field"><br>
                    
                    &nbsp;Password<br>
                    <input type="password" name="pass" id="pass" class="field"><br>
                    <input type="submit" id="Register" class="submit" value="Register"><br>
                </form>
            </div>
        </div>
    </body>
</html>