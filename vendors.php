
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Listing Vendors</title>
<?php include("metalinks.php");?>

</head>
<body id="theme-default" class="full_block">
<div id="container">
<?php include("header.php");?>
	
	<?php include("navbar.php");?>
	<div id="content">
		<div class="grid_container">
			<?php include("client_sidebar.php");?>
			<div class="grid_10 full_block">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Listing Vendors</h6>
					</div>
					<div class="widget_content">
						 <table class="display" id="data_tbl_tools">
						<thead>
						<tr>
							<th>Company Name</th>
							<th>Contact Name</th>
							<th>City</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
						</thead>
						<tbody>
						<?php 
							for($i=1;$i<20;$i++){
						?>
							<tr class="gradeA">
								<td class="center">Clickrstop Software Solutions</td>
								<td class="center">Sujit</td>
								<td class="center">Kolkata</td>
								<td class="center">support@portme.co</td>
								<td class="center">+91 7074459217</td>
							</tr>
						<?php
							}
						?>
						</tbody>
					  </table>
					</div>
				</div>
			</div>
			</div>
		</div>
		<span class="clear"></span>
	</div>
</div>
<?php include("footer.php");?>
</body>
</html>