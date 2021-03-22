<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	*{
	padding:0px;
	margin:0px;
}
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	
.menubar
	{
	background-color:black;
	text-align:center;
	width: 100%;
}
.menubar ul{
	list-style:none;
	display:inline-flex;
	padding:15px;
	
}
.menubar ul li a{
	color:white;
	text-decoration:none;
	padding:10px;
}
.menubar ul li{
	padding:15px;
}
.menubar ul li a:hover{
	background-color:red;
	border-radius:10px;
}
.submenu{
	display:none;
}
.menubar ul li:hover .submenu{
	display:block;
	position:absolute;
	background-color:black;
	border-radius:10px;
	
	
}
.submenu ul{
	display:block;
}
.submenu ul li{
	border-bottom:2px solid red;
}
h1{
	text-align: center;
	color: red;
	font-size: 50px;
}
.bi{
	background-image:url("../img/bbb.jpg");
	background-size:cover;
}


	</style>
</head>
<body class="bi">
<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/bhome">HOME</a></li>
<li><a href="<?php echo base_url()?>main/gallery">GALLERY</a></li>
<li><a href="#">REGISTRATION</a>
<div class="submenu">
<ul>
<li><a href="<?php echo base_url()?>main/donorview">DONOR</a></li>
<li><a href="<?php echo base_url()?>main/orgview">ORGANIZATION</a></li>
</ul>
</div>
</li>
<li><a href="<?php echo base_url()?>main/blog">LOGIN</a></li>

</ul>

</nav>
<h1>DONOR REGISTRATION</h1>

	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/donorinsert">
		<fieldset style="width:300px;height:900px;background-color: blue;">
			<legend><strong></strong></legend>
		<table>
			<tr>
				<td>
		Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	

		<tr><td>Address:</td>
		<td><textarea name="address"></textarea></td></tr>
		<tr><td>Age:</td>
			<td><input type="text" name="age">
		</tr>
		<tr>
		<td>
		District:</td>
		<td><input list="district" name="dict">
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
		Phone number:</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td>
		Height:</td>
		<td><input type="text" name="height"></td>
	</tr>
	<tr>
		<td>
		Weight:</td>
		<td><input type="text" name="weight"></td>
	</tr>
	<tr>
		<td>
		Adharno:</td>
		<td><input type="text" name="adharno"></td>
	</tr>
		<tr>
		<td>
		Blood group:</td>
		<td><input list="blood" name="bloodgroup">
			<datalist id="blood">
				<option value="O+ve">
				<option value="AB+ve">
				<option value="O-ve">
				<option value="A+ve">
				<option value="AB-ve">
			</datalist></td>
	</tr>
		<tr><td>Email:</td>
		<td><input type="Email" name="email"></td></tr>
		<tr><td>Password:</td>
		<td><input type="Password" name="pass"></td></tr>
		<tr><td><input type="submit" name="sub" value="Register"></td></tr>
		

	</table>
</fieldset>


	</form>
</body>
</html>