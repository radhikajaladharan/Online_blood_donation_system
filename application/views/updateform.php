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
	
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/updatedetails1">
		<?php
			
	if(isset($user_data))
	{
		foreach($user_data->result() as $row1)
		{
			?>
		<fieldset style="width:300px;height:900px">
			<legend style="color: red"><strong>Edit</strong></legend>

			
		<table>

			<tr>
				<td>
		Firstname:</td>
		<td><input type="text" name="fname" value="<?php echo $row1->Firstname;?>">
		</td>
	</tr>
	<tr>
		<td>
		Lastname:</td>
		<td><input type="text" name="lname" value="<?php echo $row1->Lastname;?>"></td>
	</tr>

		<tr><td>Address:</td>
		<td><textarea name="address"><?php echo $row1->Address;?></textarea></td></tr>
		<tr>
		<td>
		District:</td>
		<td><input list="district" name="dict" value="<?php echo $row1->District;?>" >
			<datalist id="district">
				<option value="kollam">
				<option value="Trivandrum">
				<option value="kottayam">
				<option value="Alapuzha">
				<option value="Idukki">
			</datalist></td>
	</tr>
	<tr>
		<td>
		Pincode:</td>
		<td><input type="text" name="pin" value="<?php echo $row1->Pincode;?>"></td>
	</tr>
	<tr>
		<td>
		Phone number:</td>
		<td><input type="text" name="phone" value="<?php echo $row1->Phonenumber;?>"></td>
	</tr>
	<tr>
		<td>
		DOB:</td>
		<td><input type="date" name="dob" value="<?php echo $row1->DOB;?>"></td>
	</tr>
		<tr><td>Gender:</td>
		<td>Gender:</td>
					<td><select name="gen"><option><?php echo $row1->Gender;?></option>
						<option>Male</option>
						<option>Female</option></select></td></tr>
		<tr><td>Highest education:</td>
		<td><input list="educ" name="edu" value="<?php echo $row1->Highest_education;?>">
			<datalist id="educ">
				<option value="MCA">
				<option value="BCA">
				<option value="Btech">
				<option value="Msc">
				<option value="Bsc">
			</datalist></td></tr>
		<tr><td>Email:</td>
		<td><input type="Email" name="email" value="<?php echo $row1->Email;?>" ></td></tr>
		<tr><td><input type="submit" name="update" value="Update"></td></tr>
		<tr><td><a href="<?php echo base_url()?>main/studpage">BACKTOHOME</a></td></tr>
		


	</table>
	<?php
		}
	}
	?>
	
</fieldset>


	</form>

</body>
</html>