<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
		border: 2px solid;
		border-collapse:collapse;
	}
	.bi{
	background-image:url("../img/download (2).jpg");
	background-size:cover;
}
	</style>
</head>
<body class="bi">
	<form method="post" action="<?php echo base_url()?>main/notiftable">
	<table>
		<tr>
			<td>Teachername</td>
			<td>Phone no</td>
			<td>Notification</td>
			<td>Current date</td>
			</tr>
			<?php
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
				{
					?>
					<tr>
						<td><?php echo $row->Name;?></td>
						<td><?php echo $row->Phonenumber;?></td>
						<td><?php echo $row->notification;?></td>
						<td><?php echo $row->currentdate;?></td>

						</tr>
					<?php
				}
			}
			?>

		
			</table>
			<tr><td><a href="<?php echo base_url()?>main/studpage">BACKTOHOME</a></td></tr>
			</form>
			</body>
			</html>
			

	