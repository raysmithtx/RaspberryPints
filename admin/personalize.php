<?
session_start();
if(!isset( $_SESSION['myusername'] )){
header("location:index.php");
}

require 'includes/conn.php';
require '../includes/config_names.php';
require 'includes/configp.php';

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
            <li class="current">Configure Settings</li>
        </ul>
    </div>
    <!-- Top Breadcrumb End -->
     
    <!-- Right Side/Main Content Start -->
    <div id="rightside">

	
		 <div class="contentcontainer med left">
            <div class="headings alt">
                <h2>Configure Your Tap List Display Settings</h2>
            </div>
            <div class="contentbox">
			<h2>Enable/Disable Features</h2><br /> 
			<form method="post" action="update_column.php">
<?php
foreach($result as $row) {
echo '<h3>' . $row['displayName'] . '</h3>' .
'On<input type="radio" ' . ($row['configValue']?'checked':'') . ' name="' . str_replace(' ','',$row['id']) . '" value="1">' .
'Off<input type="radio" ' . (!$row['configValue']?'checked':'') . ' name="' . str_replace(' ','',$row['id']) . '" value="0"><br>' .
'<br>';
 }

?>
<input type="submit" class="btn" value="Save" />
</form>
<hr />
			<?php
			$sql="SELECT configValue FROM config WHERE configName ='".ConfigNames::HeaderText."'";
$result=mysql_query($sql);
$headerText=mysql_fetch_array($result);?>

<h2>Change Header Text</h2>
			<form method="post" action="update_header_text.php"><br />
             <b>Header text</b><br />
			<input type="text" class="mediumbox" value="<? echo $headerText['configValue']; ?>" name="header_text"> &nbsp <br />
			<input type="submit" class="btn" name="Submit" value="Submit">
			</form>
		<hr />	
		<form enctype="multipart/form-data" action="update_logo.php" method="POST">
		<br />
		<h2>Change Site And Admin Logo</h2><br /><input name="uploaded" type="file" accept="image/gif, image/jpg, image/png"/><br /><br />
		<input type="submit" class="btn" value="Upload" />
		</form> 
		<hr />
		<form enctype="multipart/form-data" action="update_background.php" method="POST">
		<br />
		<h2>Change Background Image</h2><br /><input name="uploaded" type="file" accept="image/gif, image/jpg, image/png"/><br /><br />
		<input type="submit" class="btn" value="Upload" /><br /><br />
		</form> 
		<form action="restore_background.php" method="POST">
<hr />
		<input type="submit" class="btn" value="Restore Default Background" />
		</form> 
		<br />
		
            </div>

        </div>
    <!-- Start Footer -->   
<? 
include 'footer.php';
?>

	<!-- End Footer -->
          
    </div>
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
</body>
</html>
