
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Add Tax</title>
<?php include("metalinks.php");?>
</head>
<body id="theme-default" class="full_block">
<div id="container">
<?php include("header.php");?>
	<?php include("navbar.php");?>
	<div id="content">
		<div class="grid_container">
			<?php include("settings_sidebar.php");?>
			<div class="grid_10 full_block">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add Tax</h6>
					</div>
					<div class="widget_content">
						<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<legend>Add New Tax</legend>
										<ul>
											<li>
											<div class="form_grid_12">
												<label class="field_title">Tax Name</label>
												<div class="form_input">
													<div class="form_grid_10 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											
											<div class="form_grid_12">
												<label class="field_title">Percentage</label>
												<div class="form_input">
													<div class="form_grid_10 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
													<span class="clear"></span>
												</div>
											</div>

											  <div class="form_grid_2">
												<label class="field_title">Surcharges</label>
											  </div>
											  <div class="form_grid_10" style="margin-left:-107px;">
												<div class="form_input">
													<div class="form_grid_12 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
													<span class="clear"></span>
												</div>
											  </div>

											  <div class="form_grid_12">
												<span>
													<div class="checker" id="uniform-undefined">
														<input name="field08" class="checkbox" type="checkbox" value="First" tabindex="7" style="opacity: 0;">
													</div>
													<label class="choice">Can be selected in invoices and items</label>
												</span>
											  </div>

											</li>
										</ul>
									</fieldset>
									</li>
								</ul>
							</div>
							<ul>
								<li>
								<div class="form_grid_12 full_block">
									<div class="form_grid_12">
										<div class="widget_content" style="text-align:center;">
											<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="reset" class="btn_small btn_blue"><span>Reset</span></button>
										</div>
									</div>
								</div>
								</li>
							</ul>
						</form>
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