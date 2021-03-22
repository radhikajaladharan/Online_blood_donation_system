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
	background-image:url("../img/student-management-system-500x500.jpg");
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
	</style>
</head>
<body class="bi">
<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/index">HOME</a></li>
<li><a href="#">REGISTRATION</a>
<div class="submenu">
<ul>
<li><a href="<?php echo base_url()?>main/regist1">Student</a></li>
<li><a href="<?php echo base_url()?>main/teacher1">Teacher</a></li>
</ul>
</div>
</li>
<li><a href="<?php echo base_url()?>main/login">LOGIN</a></li>
</ul>

</nav>
</body>
</html>