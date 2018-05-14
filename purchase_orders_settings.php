
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Purchase Order Settings</title>
<?php include("metalinks.php");?><!-- Jquery -->
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
						<h6>Purchase Order Settings</h6>
						<div id="widget_tab">
							<ul>
								<li><a href="#tab1" class="active_tab">Options</a></li>
								<li><a href="#tab2">Labels and Columns</a></li>
							</ul>
						</div>
					</div>
					<div class="widget_content">
						<div id="tab1">
							<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<div class="form_grid_12 multiline">
										<label class="field_title">Show Shipping Address</label>
											<div class="form_input on_off alpha">
												<input type="checkbox" checked="checked" id="on_off_on"/>
											</div>
										<span class="clear"></span>
									</div>
									<div class="form_grid_12 multiline">
										<label class="field_title">Show Total in words</label>
										<div class="form_input on_off alpha">
												<input type="checkbox" checked="checked" id="on_off_on"/>
											</div>
										<span class="clear"></span>
									</div>
									<div class="form_grid_12 multiline">
										<label class="field_title">Show Amount Due</label>
										<div class="form_input on_off alpha">
												<input type="checkbox" checked="checked" id="on_off_on"/>
											</div>
										<span class="clear"></span>
									</div>
									<div class="form_grid_12 multiline">
										<label class="field_title">Show Contact person in vendor section</label>
										<div class="form_input on_off alpha">
												<input type="checkbox" checked="checked" id="on_off_on"/>
											</div>
										<span class="clear"></span>
									</div>
									<div class="form_grid_12 multiline">
										<label class="field_title">Show Primary signature</label>
										<div class="form_input on_off alpha">
												<input type="checkbox" checked="checked" id="on_off_on"/>
											</div>
										<span class="clear"></span>
									</div>
									<div class="form_grid_12 multiline">
										<label class="field_title">Show Secondary signature</label>
										<div class="form_input on_off alpha">
												<input type="checkbox" id="on_off_on"/>
											</div>
										<span class="clear"></span>
									</div>
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
						<div id="tab2">
							<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<ul>
											<li>
											<div class="form_grid_6">
												<div class="form_grid_12 multiline">
													<label class="field_title">Purchase Order Title</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">bill to</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">ship to</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">terms</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text" />
															</div>
														</div>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_6">
												<div class="form_grid_12 multiline">
													<label class="field_title">Item Name (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">Description (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">Quantity (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">unit (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">unit price (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">tax (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text"/>
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">discount (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text" />
															</div>
														</div>
													<span class="clear"></span>
												</div>
												<div class="form_grid_12 multiline">
													<label class="field_title">total (column)</label>
														<div class="form_input">
															<div class="form_grid_5 alpha">
																<input name="mobile" type="text" />
															</div>
														</div>
													<span class="clear"></span>
												</div>
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
		</div>
		<span class="clear"></span>
	</div>
</div>
<?php include("footer.php");?>
<script>
SyntaxHighlighter.all();
</script>
</body>
</html>