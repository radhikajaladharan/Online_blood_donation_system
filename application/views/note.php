<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
	*{
	padding:0px;
	margin:0px;
}
table,td{
		padding: 20px;
		font-size: 20px;
		border: 1px solid red;
		border-collapse:collapse;
		background-color: white;
	
	}
.bi{
	background-image:url("../img/15.jpg");
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
</style>
</head>
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
<h1 style="text-align: center; color: red">NOTIFICATION</h1>
<table border="1px solid red" style="margin-top: 100px;margin-left: 540px;">
	<thead>
		<th>Id</th>
		<th>Date</th>
		<th>Notification</th>
		<th>Action</th>


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
		
			
				<td><a href="<?php echo base_url();?>main/deletedata/<?php echo $row->id;?>">delete</a></td>

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