
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Listing Services</title>
<?php include("metalinks.php");?>

</head>
<body id="theme-default" class="full_block">
<div id="container">
<?php include("header.php");?>
	
	<?php include("navbar.php");?>
	<div id="content">
		<div class="grid_container">
			<?php include("item_sidebar.php");?>
			<div class="grid_10">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Listing Services</h6>
					</div>
					<div class="widget_content">
					  <table class="display" id="data_tbl_tools">
						<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Type</th>
							<th>Price</th>
							<th>Unit</th>
							<th>Quantity</th>
						</tr>
						</thead>
						<tbody>
						<?php 
							for($i=1;$i<20;$i++){
						?>
							<tr class="gradeA">
								<td class="center">Website</td>
								<td class="center">Complete Website</td>
								<td class="center">Product</td>
								<td class="center">4,500</td>
								<td class="center">Piece(pc)</td>
								<td class="center">150</td>
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

<?php include("footer.php");?>
</body>
</html>