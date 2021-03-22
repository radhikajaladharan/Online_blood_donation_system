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
	background-image:url("../img/2.jpg");
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
	font-size: 50px;
}

	

	</style>
</head>
<body class="bi">
<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/dhome">HOME</a></li>
<li><a href="<?php echo base_url()?>main/orgtable2">ORGANIZATION</a></li>
<li><a href="#">VIEW</a>
<div class="submenu">
<ul>
<li><a href="<?php echo base_url()?>main/noteview">NOTIFICATION</a></li>
<form enctype="multipart/form-data" method="post" action="">
	<?php
	if($n->num_rows()>0)
	{
		foreach($n->result() as $row)
		{
			?>
	
				<li><a href="<?php echo base_url('/upload/');if($row->pic) echo $row->pic; else echo 'no report';?>" target="_blank">INSTRUCTION</a></li>
					
				
	<?php
	}
	}
	?>
</form>

</ul>
</div>
</li>
<li><a href="<?php echo base_url()?>main/dupdateform">PROFILE</a></li>

<li><a href="<?php echo base_url()?>main/blog">LOGOUT</a></li>

</ul>

</nav>
<h1>DONOR HOME</h1>

</body>
</html>