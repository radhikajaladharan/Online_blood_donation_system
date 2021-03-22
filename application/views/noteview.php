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
	background-image:url("../img/11.jpg");
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
table,td{
		padding: 20px;
		font-size: 20px;
		border: 2px solid white;
		border-collapse:collapse;
		margin-left:500px;
		margin-top: 80px;
		background-color: black;
		color: white;
	}

h1{
	text-align: center;
	color: red;
	font-size: 50px;
}
</style>
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

<h1>NOTIFICATION</h1>
<table>
	<thead>
		<th>Id</th>
		<th>Date</th>
		<th>Notification</th>
		


	</thead>


	<?php
	if($n->num_rows()>0)
	{
		foreach($n->result() as $row)
		{
			?>
			<tr>
				<td><?php echo $row->id; ?></td>
		

		
				<td><?php echo $row->date; ?></td>
	

	
				<td><?php echo $row->notification; ?></td>
		
			
				
	<?php
	}
	}
	else
	{
	?>

	<tr>
		<td colspan="4">no data found</td>
	</tr>

	<?php
	}
	?>
</table>
</body>
</html>