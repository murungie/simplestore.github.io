<?php
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Dashboard.</p>
<p><a href="index.php">Home</a> 
<a href="view.php">View Records</a> 
<a href="insert.php">Insert New Record</a> 
<a href="logout.php">Logout</a></p>
</div>
</body>
</html>