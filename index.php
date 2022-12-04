<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    if(array_key_exists('submit', $_POST)) {
        validation();
    }
    function validation() {
        $email=$_POST['email'];
        $email = stripslashes($email);
        $password=$_POST['pwd'];
        if($email=='interns@kohli.tel' || $email=='poa@kohli.tel')
        {
            echo "<script>alert('Signup Successful');
           </script>";
        }
        else
        {
            echo"<script>alert('You are not allowed to register on this site');</script>";
        }

    }
   
?>
<div class="maincontainer">
<div class="monkeylogin">
	<div class="animcon" id="animcon">
		<img id="hands" src="https://raw.githubusercontent.com/naaficodes/Monkey-Login/master/images/hands.png"/>
	</div>
	<div class="formcon">
	<form action="" name="signup" method="post">
		<input type="email" id="mail" name="email" onclick="openeye();" class="tb" placeholder="Email" autocomplete="off" required/>
		<br/>
		<br/>
		<input type="password" id="pwdbar" onclick="closeye();" name="pwd" class="tb"placeholder="Password" required/>
		<br/>
		<br/>
		<input type="submit" name="submit" class="sbutton" value="S I G N U P" />
	</form>
	</div>
</div>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>