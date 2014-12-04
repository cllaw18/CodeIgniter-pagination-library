<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>CodeIgniter Pagination Library - Soyo Solution</title>
</head>
<body>
<div id="container">
	<h1 style="text-align:center">Page Navigation in PHP</h1>
	<table width="400" border="1" align="center">
		<tr>
			<td width="100" bgcolor="#CCCCCC"><p>ID</p></td>
			<td width="300" bgcolor="#CCCCCC">Post Date</td>
            <td width="300" bgcolor="#CCCCCC">Post Title</td>
		</tr>
		<h1 style="text-align:center"></h1>
			<div id="body">
 
		<?php
		foreach($results as $data) {
		?>
		<tr>
            <td><?php echo $data->id; ?></td>
			<td><?php echo $data->post_date; ?></td>
			<td><?php echo $data->post_title; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
	<div style="text-align:center"><?php echo $links; ?></div>
</div>
</div>
<hr />
</body>
</html>
