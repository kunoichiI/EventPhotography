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
?>
<!DOCTYPE html>
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style_1.css" type="text/css" />
</head>
<body>
<div id="header">
<label>My Pictures</label>
</div>
<div id="body">
<table width="80%" border="1">
    <tr>
    <th colspan="4">User:<?php echo $username?></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
$sql="SELECT * FROM tbl_uploads WHERE user='$username'";
$result_set=mysql_query($sql);
while($row=mysql_fetch_array($result_set))
{
?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="images/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
}
?>
    </table>

</div>

<div>
  <a href="logout.php?logout"><h2>Sign Out</h2></a>
</div>
</body>
</html>
