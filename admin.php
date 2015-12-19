<?php
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style_1.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading Page</label>
</div>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" /><br>
  Name:<input type="text" name="username"><br>
  Price:<input type="text" name="price"><br>
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>

        <?php
	}
	?>
</div>
<div id="footer">

  <a href="logout.php?logout"><h2>Sign Out</h2></a>
</div>
</body>
</html>
