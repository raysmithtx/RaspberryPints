<?
session_start();
if(!isset( $_SESSION['myusername'] )){
header("location:index.php");
}
require 'includes/conn.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>RaspberryPints</title>
<link href="styles/layout.css" rel="stylesheet" type="text/css" />
<link href="styles/wysiwyg.css" rel="stylesheet" type="text/css" />
<!-- Theme Start -->
<link href="styles.css" rel="stylesheet" type="text/css" />
<!-- Theme End -->
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
</style>


</head>
	<!-- Start Header  -->
<?
include 'header.php';
?>
	<!-- End Header -->
        
    <!-- Top Breadcrumb Start -->
    <div id="breadcrumb">
    	<ul>	
        	<li><img src="img/icons/icon_breadcrumb.png" alt="Location" /></li>
        	<li><strong>Location:</strong></li>
            <li><a href="#" title="">Sub Section</a></li>
            <li>/</li>
            <li class="current">My Account</li>
        </ul>
    </div>
    <!-- Top Breadcrumb End -->
    
<!-- Right Side/Main Content End -->

       
	<!-- Start Left Bar Menu -->   
<? 
include 'left_bar.php';
?>
	<!-- End Left Bar Menu -->  
	<!-- Start Js  -->
<?
include 'scripts.php';
?>
	<!-- End Js -->
    <!--[if IE 6]>
    <script type='text/javascript' src='scripts/png_fix.js'></script>
    <script type='text/javascript'>
      DD_belatedPNG.fix('img, .notifycount, .selected');
    </script>
    <![endif]-->  
<div id="rightside">

 <p style="padding:0px;margin:0px"><b>
 <font size="2" Color="Black" font-family="Impact">Name:</font>
 <b><?php
  
  $sql="SELECT `name` FROM `users` WHERE username='$_SESSION[myusername]'";
  $result=mysql_query($sql);

echo mysql_result($result, 0, 'name');
?></b><br />
 <font size="2" Color="Black" font-family="Impact">Username:</font>
   <?php
  
  $sql="SELECT `username` FROM `users` WHERE username='$_SESSION[myusername]'";
$result=mysql_query($sql);

echo mysql_result($result, 0, 'username');

?><br />
<font size="2" Color="Black" font-family="Impact"> Email:</font>
  <?php
  
  $sql="SELECT `email` FROM `users` WHERE username='$_SESSION[myusername]'";
$result=mysql_query($sql);

echo mysql_result($result, 0, 'email');

?>
 </p>
</div> <!--end right side -->
</body>
</html>
