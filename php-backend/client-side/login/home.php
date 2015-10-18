<?php
session_start();
if(empty($_SESSION['login_user']))
  {
    header('Location: index.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Project BlendClust | Login</title>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
<body>
	<div id="main">
		<h1>Project BlendClust</h1>
		<a href="logout.php">Logout</a>
	</div>
</body>
</html>
