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
		border: 2px solid white;
		border-collapse:collapse;
		margin-left: 250px;
		margin-top: 80px;
		background-color: black;
		color: white;
	}
	.bi{
	background-image:url("../img/6.png");
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
	color: black;
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

</ul>
</div>
</li>
<li><a href="<?php echo base_url()?>main/dupdateform">PROFILE</a></li>

<li><a href="<?php echo base_url()?>main/blog">LOGOUT</a></li>

</ul>

</nav>
<h1>ORGANIZATION VIEW</h1>

	<form method="post" action="">
	<table>
		<tr>
			<td>Name</td>
			<td>Address</td>
			<td>District</td>
			<td>Phone</td>
			<td>Organization Id</td>
			<td>Email</td>
			
			</tr>
			<?php
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
				{
					?>
					<tr>
						<td><?php echo $row->name;?></td>
						<td><?php echo $row->address;?></td>
						<td><?php echo $row->district;?></td>
						<td><?php echo $row->phoneno;?></td>
						<td><?php echo $row->oid;?></td>
						<td><?php echo $row->email;?></td>
						
						
					<?php
				}
			}
			
				?>
				


	</table>
	
</form>
</body>
</html>