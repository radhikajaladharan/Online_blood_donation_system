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
		padding: 10px;
		font-size: 20px;
		border: 1px solid red;
		border-collapse:collapse;
		
		background-color: green;
		width: 100px;
	}
	.bi{
	background-image:url("../img/15.jpg");
	background-size:cover;
	background-repeat: no-repeat;

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
<h1>DONOR</h1>

	<form method="post" action="">
	<table>
		<tr>
			<td>Name</td>
			<td>Address</td>
			<td>Age</td>
			<td>District</td>
			<td>Phone</td>
			<td>Height</td>
			<td>Weight</td>
			<td>Adharno</td>
			<td>Bloodgroup</td>
			<td>Email</td>
			<td>Donated date</td>
			<td>Next donating date</td>
			<td>Action</td>
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
						<td><?php echo $row->age;?></td>
						<td><?php echo $row->district;?></td>
						<td><?php echo $row->phoneno;?></td>
						<td><?php echo $row->height;?></td>
						<td><?php echo $row->weight;?></td>
						<td><?php echo $row->adharno;?></td>
						<td><?php echo $row->bloodgroup;?></td>
						<td><?php echo $row->email;?></td>
						<td><?php echo $row->ddate;?></td>
						<td><?php echo $row->ndate;?></td>
						<td><a href="<?php echo base_url()?>main/updatedate/<?php echo $row->id;?>">UPDATE</a></td>
						
						
					<?php
				}
			}
			
				?>
				


	</table>
	
</form>
</body>
</html>