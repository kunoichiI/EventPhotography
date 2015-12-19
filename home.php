<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$username = $userRow['username'];
$user_level = $userRow['type'];
$query_level = mysql_query("SELECT name From user_level WHERE id = '$user_level'");
$run_level = mysql_fetch_array($query_level);
$level_name = $run_level['name'];

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>Photo Gallery</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>

<div id="body">
	<!--display image gallery for user here-->
	<p>You are logged in as <b><?php echo $username ?></b> [<?php echo $level_name?>]</p>


	<?php
	if($user_level == 1){
		echo "<a href='admin.php'>Admin Panel</a><br>";
		echo "<a href='view.php'>View My Pictures</a><br>";
	}

	?>
</p>
<?php
if($user_level == 2){
	echo "<a href='view_pic.php'>View My Pictures</a><br>";
}
?>


</div>

</body>
</html>
