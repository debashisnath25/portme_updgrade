
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Invoices</title>
<?php include("metalinks.php");?>

</head>
<body id="theme-default" class="full_block">
<div id="container">
<?php include("header.php");?>
	
	<?php include("navbar.php");?>
	<div id="content">
		<div class="grid_container">
			<div class="grid_12">
				<div class="widget_wrap">
					<div class="widget_top">
						<div class="grid_10">
							<span class="h_icon blocks_images"></span>
							<h6>Invoices</h6>
						</div>
						<div class="grid_2">
							<div class="btn_30_light">
								<a href="add_items.php"><span class="icon add_co"></span><span class="btn_link">Add Invoice</span></a>
							</div>
						</div>
					</div>
					<div class="widget_content">
					<h3>View all Invoices</h3>
					  <table class="display" id="data_tbl_tools">
						<thead>
						<tr>
							<th>Issue Date</th>
							<th>Doc Number</th>
							<th>Status</th>
							<th>Client Name</th>
							<th>Due Date</th>
							<th>Tax</th>
							<th>Amount</th>
							<th>Date of Payment</th>
							<th>Balance</th>
							<th>Dr/Cr</th>
						</tr>
						</thead>
						<tbody>
						<?php 
							for($i=1;$i<20;$i++){
						?>
							<tr class="gradeA">
								<td class="center"><?php echo date("d F Y");?></td>
								<td class="center"><?php echo $i;?></td>
								<td class="center">Open</td>
								<td class="center">Portme</td>
								<td class="center">20 May 2018</td>
								<td class="center">540</td>
								<td class="center">5,040</td>
								<td class="center">-</td>
								<td class="center">5,040</td>
								<td class="center">Dr</td>
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