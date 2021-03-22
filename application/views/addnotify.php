<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
	font-size: 30px;
}
</style>
<body class="bi">
	<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/ahome">HOME</a></li>
<li><a href="#">VIEW</a>
<div class="submenu">
<ul>
<li><a href="<?php echo base_url()?>main/donortable">DONOR</a></li>
<li><a href="<?php echo base_url()?>main/orgtable">ORGANIZATION</a></li>
</ul>
</div>
</li>
<li><a href="#">NOTIFICATION</a>
<div class="submenu">
<ul>
<li><a href="<?php echo base_url()?>main/addnotify">ADD</a></li>
<li><a href="<?php echo base_url()?>main/notification">DELETE</a></li>
</ul>
</div>
</li>
<li><a href="<?php echo base_url()?>main/blog">LOGOUT</a></li>

</ul>

</nav>
<h1>ADD NOTIFICATION</h1>
<form action="<?php echo base_url();?>main/addnotification" method="post" style="margin-left: 450px;">

		<fieldset style="width:300px;height:300px;margin-top: 100px; margin-left:50px; background-color: red">
			<h1 style="text-align: center;">Add Notification</h1>
			<legend style="color: black"></legend>
		<table>
	<tr>
		
		<td><textarea name="note" placeholder="Write Here"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>

</fieldset>
</form>
</body>
</html>
