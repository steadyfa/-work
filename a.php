<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FF33FF">
<div id="profile">
<b id="welcome"> YOU ARE Welcome  "WALOKOKA" Tovaawo : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../logout.php">Log Out</a></b>
</div>
</body>
</html>
