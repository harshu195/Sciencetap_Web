<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manage Users and Admins</title>
	<link href="../../../css/bootstrap.min.css" rel="stylesheet"/>
	<link href="../../../css/bootstrap-theme.min.css" rel="stylesheet"/>
	<link href="../../css/style.css" rel="stylesheet"/>
</head>
<body class="hasHeader">
<div class="container-fluid">
<?php include 'navbarMain.html.php';?>
<div class="row">
<?php if(isset($_SESSION['superAdmin'])){ ?>
<form action="" method="post">
	<input type="submit" name="action" class="btn btn-success btn-block" value="Create A User">
</form>
<br>
<?php }?>
<form action="" method="post">
	<input type="submit" name="action" class="btn btn-success btn-block" value="Manage User Projects And Roles">
</form>
<br>
<a class="btn btn-primary btn-block" href="..">Return to Manage Home</a>
<br>
<a class="btn btn-primary btn-block" href="../..">Return to Home</a>
<br>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/logout.inc.html.php';?>
</div>
<script src="../../../js/jquery-2.1.3.min.js"></script>
<script src="../../../js/bootstrap.min.js"></script>
</div>
</body>
</html>