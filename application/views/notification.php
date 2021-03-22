<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	.bi{
	background-image:url("../img/images (2).jpg");
	background-size:cover;
}
	</style>
</head>
<body class="bi">
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/notif2">
		<fieldset style="width:100px;height:500px">
			<legend style="color: red"><strong>Notification</strong></legend>
		<table>
			<tr>
				<td>
		Notification:</td>
		<td><textarea name="noti"></textarea></td>
	</tr>

		
		<tr><td><input type="submit" name="sub" value="Submit"></td></tr>
		<tr><td><a href="<?php echo base_url()?>main/teachpage">BACKTOHOME</a></td></tr>

	</table>
</fieldset>


	</form>
</body>
</html>