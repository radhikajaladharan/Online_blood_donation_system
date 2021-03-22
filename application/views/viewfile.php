<!DOCTYPE html>
<html>
<head>
	<title>viewfile</title>
</head>
<style>
</style>
<body>
<form enctype="multipart/form-data" method="post" action="">
	<?php
	if($n->num_rows()>0)
	{
		foreach($n->result() as $row)
		{
			?>
			<tr>
				<td><a href="<?php echo base_url('/upload/');if($row->pic) echo $row->pic; else echo 'no report';?>" target="_blank">instructions</a></td>
			</tr>		
				
	<?php
	}
	}
	else
	{
	?>

	<tr>
		<td colspan="4">no data found</td>
	</tr>

	<?php
	}
	?>
</table>
</body>
</html>