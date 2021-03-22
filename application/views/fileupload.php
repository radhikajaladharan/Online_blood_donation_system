<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<form action="<?php echo base_url()?>main/fileupload" enctype="multipart/form-data" method="post">
		<tr>
			<td>Choose Your File</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit"></td>
		</tr>

</form>
</table>
</body>
</html>