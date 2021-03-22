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
	background-image:url("../img/1.jpg");
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
	font-size: 55px;
}
h2{
	text-align: center;
	color: white;
	font-size: 30px;
	margin-top: 350px;
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
<h1>ONLINE BLOOD DONATION SYSTEM</h1>
<marquee><h2><em>"DONATE YOUR BLOOD FOR A REASON, LET THE REASON TO BE LIFE"</em></h2></marquee>
</body>
</html>