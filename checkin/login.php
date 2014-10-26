<?php 
session_start();

?>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<link href="content/css/bootstrap.css" rel="stylesheet" type="text/css" />
<style>
.passkey{
	font-family: 'Kaushan Script', cursive;
	font-weight:100;
	font-size:54px;
	}
	
.passkey_bx{
	height:100px;
	line-height:100px;
	font-size:54px;
	}
</style>
<body >
<div style="width:100%; vertical-align:middile;" >
<center>
<div style="width:60%; max-height:300px">
<form class="form-group "  action="login_check.php" method="post"><br />
<label for="pass" class="passkey" >Your Pass Key Please: </label><br /><br />

<input type="password" class="form-control passkey_bx" placeholder="Admin Passkey Please" name="pass" /><br />
<input type="submit" class="btn btn-default" />
</form>

</div>
</center>

</div>
</body>