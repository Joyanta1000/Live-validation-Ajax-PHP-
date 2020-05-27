<?php
include_once("config.php");


 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PHP GURUKUL | DEMO</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkusernameAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#username-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="">PHP GURUKUL Programming Blog</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>

</nav>


     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-7">
    <div class="row">
      <div class="col-xs-12">
        <h3>Email and Username Availability checker With AJAX(JQuery) and PHP </h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
	 <tr>
	 <td height="41" colspan="2">
	<b>NOTE:</b> Please type an email and continue filling the other fields. You'll see the validator in action.</td>
	 </tr>
	  <tr>
	 <td height="41" colspan="2">
 Already existing email in this demo: <b>demo@gmail.com, anuj@gmail.com, john@gmail.com</b></td>
	 </tr>
	  <tr>
	 <td height="41" colspan="2">
 Already existing username in this demo: <b>demo, anuj, john</b></td>
	 </tr>
	
  <tr>
    <th width="24%"  height="46" scope="row">Email Id :</th>
    <td width="71%" ><input type="email" name="email" id="emailid" onBlur="checkemailAvailability()" value="" class="form-control" required /></td>
</tr>
<tr>
  <th width="24%"  scope="row"></th>
<td >   <span id="email-availability-status"></span> </td>
  </tr>
  <tr>
    <th height="42" scope="row">User Name</th>
    <td><input type="text" name="username" id="username" value="" onBlur="checkusernameAvailability()" class="form-control" required /></td>

  </tr>
  <tr>
  <th width="24%"  scope="row"></th>
<td >   <span id="username-availability-status"></span> </td>
  </tr>
</table>



     </form>
 
      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->


		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>