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
	background-image:url("../img/images (1).jpg");
	background-size:cover;
}
	</style>
</head>
<body class="bi">
	<form method="" action="">
	<table>
		<tr>
			
			<td>Notification</td>
			<td>Current date</td>
			<td>Action</td>
			</tr>
			<?php
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
				{
					?>
					<tr>
						<td><?php echo $row->notification;?></td>
						<td><?php echo $row->currentdate;?></td>
						<td><a href="<?php echo base_url()?>main/deletedetails1/<?php echo $row->id;?>">Delete</a></td>

						</tr>
					<?php
				}
			}
			?>
			</table>
			<tr><td><a href="<?php echo base_url()?>main/teachpage">BACKTOHOME</a></td></tr>
			</form>
			</body>
			</html>
			

	