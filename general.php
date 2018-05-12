
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | General Settings</title>
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
						<h6>General Settings</h6>
					</div>
					<div class="widget_content">
						<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
										<ul>
											<li>
											<div class="form_grid_12">
											<label class="field_title">Date Format</label>
												<div class="form_input">
													<select data-placeholder="choose date format" style=" width:300px" class="chzn-select" tabindex="13">
														<option value=""></option>
														<option>mm-dd-yyyy</option>
														<option>dd-mm-yyyy</option>
														<option>mm/dd/yyyy</option>
														<option>dd/mm/yyyy</option>
														<option>yyyy-mm-dd</option>
														<option>dd-mmm-yyyy</option>
													</select>
												</div>
											</div>

											<div class="form_grid_12">
												<label class="field_title">Decimal Places</label>
												<div class="form_input">
													<select data-placeholder="choose decimal place" style=" width:300px" class="chzn-select" tabindex="13">
														<option value=""></option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</div>
												<span class="clear"></span>
											</div>
											
											<div class="form_grid_12">
												<label class="field_title">Decimal Places for quantity</label>
												<div class="form_input">
													<select data-placeholder="choose decimal place for quantity" style=" width:300px" class="chzn-select" tabindex="13">
														<option value=""></option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_12">
												<label class="field_title">Email</label>
												<div class="form_input">
													<div class="form_grid_10 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_12">
												<label class="field_title">Website</label>
												<div class="form_input">
													<div class="form_grid_10 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Tax Information</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">GST Number</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">PAN Number</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">TIN Number</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">VAT Number</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Service Tax Number</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
										</ul>
									
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