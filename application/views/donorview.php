<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
		border: 1px solid red;
		border-collapse:collapse;
	
	}
	*{
	padding:0px;
	margin:0px;
}
	.bi{
	background-image:url("../img/7.jpg");
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
<h1>DONOR VIEW</h1>
	<form method="post" action="">
	<table style="background-color: white;">
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
			<td>Approve</td>
			<td>Reject</td>
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
						<?php
						if($row->status==1)
						{
							?>
							<td>approved</td>
							<td><a href="<?php echo base_url()?>main/donorreject/<?php echo $row->id;?>">Reject</a></td>

							<?php
						}
						elseif($row->status==2)
						{
							?>
							<td>Rejected</td>
							<td><a href="<?php echo base_url()?>main/donorapprove/<?php echo $row->id;?>">Approve
						</a>
						</td>
							<?php
						}
						else
						{
							?>
		
						<td><a href="<?php echo base_url()?>main/donorapprove/<?php echo $row->id;?>">Approve
						</a>
						</td>
						<td><a href="<?php echo base_url()?>main/donorreject/<?php echo $row->id;?>">Reject</a></td>
						<?php
					}
					?>
				</tr>

						
					<?php
				}
			}
			
				?>
				


	</table>
	
</form>
</body>
</html>