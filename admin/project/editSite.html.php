<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Site</title>
	<link href="../../../css/bootstrap.min.css" rel="stylesheet"/>
	<link href="../../../css/bootstrap-theme.min.css" rel="stylesheet"/>
	<link href="../../css/style.css" rel="stylesheet"/>
</head>
<body class="hasHeader">
<div class="container-fluid">
<?php include 'navbar.html.php';?>
	<h3>Edit Site <?php echo $name; ?></h3>
	<form action="?editSite" method="post">
		<div class="form-group">
			<label class="control-label" for="name">Name:
			<input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>">
			</label>
		</div>
		<div class="form-group">
			<label class="control-label" for="description">Description:
			<input class="form-control" type="text" name="description" id="description" value="<?php echo $description; ?>">
			</label>
		</div>
		<div class="form-group">
			<label class="control-label" for="description">Latitiude:
			<input class="form-control" type="number" name="lat" id="lat" value="<?php echo $lat; ?>" step="0.0001">
			</label>
		</div>
		<div class="form-group">
			<label class="control-label" for="description">Longitude:
			<input class="form-control" type="number" name="lon" id="lon" value="<?php echo $lon; ?>" step="0.0001">
			</label>
		</div>
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input class="btn btn-success btn-block" type="submit" value="Edit Site">
		</div>
	</form>
<a class="btn btn-primary btn-block" href="..">Return to Manage Home</a>
<br>
<a class="btn btn-primary btn-block" href="../..">Return to Home</a>
<br>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/logout.inc.html.php';?>
<script src="../../../js/jquery-2.1.3.min.js"></script>
<script src="../../../js/bootstrap.min.js"></script>
</div>
</body>
</html>