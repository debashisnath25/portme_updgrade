
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Account Settings</title>
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
						<h6>Account Settings</h6>
					</div>
					<div class="widget_content">
						<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<legend>Account</legend>
										<ul>
											<li>
											<div class="grid_6">
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
													<label class="field_title">Email for reports</label>
													<div class="form_input">
														<div class="form_grid_10 alpha">
															<input name="firstname" type="text"/>
															<span class=" label_intro"></span>
														</div>
														<span class="clear"></span>
													</div>
												</div>

												<div class="form_grid_12">
													<label class="field_title">First Name</label>
													<div class="form_input">
														<div class="form_grid_10 alpha">
															<input name="firstname" type="text"/>
															<span class=" label_intro"></span>
														</div>
														<span class="clear"></span>
													</div>
												</div>

												<div class="form_grid_12">
													<label class="field_title">Last Name</label>
													<div class="form_input">
														<div class="form_grid_10 alpha">
															<input name="firstname" type="text"/>
															<span class=" label_intro"></span>
														</div>
														<span class="clear"></span>
													</div>
												</div>
											</div>
											
											<div class="grid_6">
												<div class="widget_content">
													<blockquote class="quote_orange">
														<p style="font-size:15px;font-weight:bold;">Current Plan</p>
														<p>
															Started on: <b><?php echo date("d F Y");?></b><br/>
															10 Days Left
														</p>
													</blockquote>
												</div>
											</div>

											<div class="form_grid_12 full_block">
												<div class="form_grid_12">
													<div class="widget_content" style="text-align:center;">
														<button type="submit" class="btn_small btn_blue"><span>Update</span></button>
													<button type="reset" class="btn_small btn_blue"><span>Reset</span></button>
													</div>
												</div>
											</div>
										  </li>
										</ul>
									</fieldset>
									
									</li>
								</ul>
							</div>
							
						</form>
						<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<legend>Change Password</legend>
										<ul>
											<li>
											<div class="grid_6">
												<div class="form_grid_12">
													<label class="field_title">Current Password</label>
													<div class="form_input">
														<div class="form_grid_10 alpha">
															<input name="firstname" type="text"/>
															<span class=" label_intro"></span>
														</div>
														<span class="clear"></span>
													</div>
												</div>
												<div class="form_grid_12">
													<label class="field_title">New Password</label>
													<div class="form_input">
														<div class="form_grid_10 alpha">
															<input name="firstname" type="text"/>
															<span class=" label_intro"></span>
														</div>
														<span class="clear"></span>
													</div>
												</div>
												<div class="form_grid_12" style="margin-top:5px;">
													<label class="field_title">Confirm Password</label>
													<div class="form_input">
														<div class="form_grid_10 alpha">
															<input name="firstname" type="text"/>
															<span class=" label_intro"></span>
														</div>
														<span class="clear"></span>
													</div>
												</div>
											</div>
											<div class="form_grid_12 full_block">
												<div class="form_grid_12">
													<div class="widget_content" style="text-align:center;">
														<button type="submit" class="btn_small btn_blue"><span>Change Password</span></button>
													<button type="reset" class="btn_small btn_blue"><span>Reset</span></button>
													</div>
												</div>
											</div>
										  </li>
										</ul>
									</fieldset>
									</li>
								</ul>
							</div>
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