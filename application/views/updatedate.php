<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	*{
	padding:0px;
	margin:0px;
}
.bi{
	background-image:url("../img/12.jpg");
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
	color: red;
	font-size: 50px;
}
input{
	padding: 10px;
	margin:10px;
}

	</style>
</head>
<body class="bi">
	<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/ohome">HOME</a></li>
<li><a href="<?php echo base_url()?>main/oupdateform">PROFILE</a></li>
<li><a href="#">VIEW</a>
<div class="submenu">
<ul>
<li><a href="<?php echo base_url()?>main/noteview2">NOTIFICATION</a></li>
<li><a href="<?php echo base_url()?>main/donortable2">DONOR</a></li>
</ul>
</div>
</li>

<li><a href="<?php echo base_url()?>main/blog">LOGOUT</a></li>

</ul>

</nav>

	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/updatecurrentdate">
		<fieldset style="width:400px;height:400px;margin-top:50px;background-color: rgba(0,0,0,0.6);">
			<legend style="color: red"><strong></strong></legend>
			<h3 style="text-align: center;color: red;">Update Date</h3>
		<table>
			<tr>
				<td>
		Donated date:</td>
		<td><input type="text" name="ddate"></td>
	</tr>
	<tr>
				<td>
		Next Donating date:</td>
		<td><input type="text" name="ndate"></td>
	</tr>
	<input type="hidden" name="id" value="<?php echo $n;?>">

		
		<tr><td><input type="submit" name="sub" value="Update"></td></tr>
		

	</table>
</fieldset>


	</form>
</body>
</html>