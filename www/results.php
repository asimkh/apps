<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Details</title>
<style type="text/css">
	td{
		border-bottom:1px solid #DDD;
		padding:3px;
	}
</style>
</head>

<?php
require_once('includes/connection.php');

$query = "SELECT * FROM newsletter";

$result = mysql_query($query);
?>
<body>
<table cellpadding="0" cellspacing="0" style="font-size:11px; font-family:Arial, Helvetica, Sans-serif; width: 700px;">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
    <th>status</th>
	<th>Dated</th>
	
</tr>
<?php
while($row = mysql_fetch_object($result)){
?>
<tr>
	<td><?php echo $row->id; ?></td>
	<td><?php echo $row->name; ?></td>
	<td><?php echo $row->email; ?></td>
	<td><?php echo $row->status; ?></td>
	<td><?php echo $row->created; ?></td>
	</tr>
<?php	
}
?>
</table>
</body>
</html>
