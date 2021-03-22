<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	*{
	padding:0px;
	margin:0px;
}
	.bi{
	background-image:url("../img/13.jpg");
	background-size:cover;
}
.menubar{
	background-color:black;
	text-align:center;
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
	color: white;
	font-size: 35px;
}
	</style>
</head>
<body class="bi">
	<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/bhome">HOME</a></li>
<li><a href="<?php echo base_url()?>main/gblood">GALLERY</a></li>
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
	<form style="margin-left: 450px" action="<?php echo base_url()?>main/bloodlogin1" method="post">
		<fieldset style="width:100px;height:400px;background-color: black; margin-top: 100px;">
			<legend style="color: white"><strong></strong></legend>
			<h1>Login</h1>
		<table>
			<tr>
				<td style="color: white;">
		Email id:</td>
		<td><input type="email" name="email"></td>
	</tr>

		<tr><td style="color: white;">Password:</td>
		<td><input type="password" name="password"></td></tr>
		<tr><td><input type="submit" name="Login" value="Login" style="width: 60px;"></td></tr>
		

	</table>
</fieldset>


	</form>
</body>
</html>