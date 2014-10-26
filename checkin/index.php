<?php 
session_start();
if(!isset($_SESSION['login'])){
	header('Location:login.php');
}
?>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<body>
<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">
<h1 class="form-signin-heading text-muted">Check in for Exousia 14</h1>

<div id="result">

</div>
	<div class="form-signin" id="form">
		<input type="text" class="form-control" placeholder="Exousia ID" required="" id="exno">
		<input type="email" class="form-control" placeholder="Email address" required="" id="email" autofocus="">
		
			
<a class="btn btn-lg btn-primary btn-block" id="submit">
      Check In
    </a>
</div>
</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript">
   $('#result').hide();


      $("#submit").click(function(event){

        var exno=$("#exno").val();
        var email=$("#email").val();

 $('#result,#exno,#email').empty();


      $('#exno,#email').css( "border","1px solid #fff" );

      if(exno==''){
         $('#exno').css( "border","1px solid red" );
      }
      if(email==''){
        $('#email').css( "border","1px solid red" );
      }
     
      if(exno!='' && email!='')

          $.post( "check.php",{ exno: exno, email:email}, function(data) {
                if(data==0){
					$('#result').append("<h1>Please Check Your Credentials</h1>").fadeIn(4000);
				}
			  else if(data==1){
				 $('#result').append("<h1>Successfully Registered. Enjoy the events</h1>").fadeIn(4000);
			  }
			    else if(data==2){
				 $('#result').append("<h1>Already Registered. Enjoy the events</h1>").fadeIn(4000);
			  }
			  
			  
             }
          );

      });

</script>
</body>
</html>

