
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
											<div class="form_grid_12" style="margin-top:5px;">
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

											<div class="form_grid_12" style="margin-top:5px;">
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
											
											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Decimal Places for quantity</label>
												<div class="form_input">
													<select data-placeholder="choose decimal place for quantity" style=" width:300px" class="chzn-select" tabindex="13">
														<option value=""></option>
														<option>0</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Document Prefix Seperator</label>
												<div class="form_input">
														<select data-placeholder="choose document prefix seperator" style=" width:300px" class="chzn-select" tabindex="13">
														<option value=""></option>
														<option>-</option>
														<option>/</option>
														<option>\</option>
													</select>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Use total without decimals (Round off amount)</label>
												<div class="form_input">
													<div class="form_input on_off alpha">
														<input type="checkbox" checked="checked" id="on_off_on"/>
													</div>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Use indian formatting for numbers</label>
												<div class="form_input">
													<div class="form_input on_off alpha">
														<input type="checkbox" checked="checked" id="on_off_on"/>
													</div>
													<span class="clear"></span>
												</div>
											</div>

											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Add current stock of products and keep track of inventory</label>
												<div class="form_input">
													<div class="form_input on_off alpha">
														<input type="checkbox" id="on_off_on"/>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											
											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Show Bank Details</label>
												<div class="form_input">
													<div class="form_grid_3" style="margin-left:0%;">
														<div class="form_input on_off alpha">
															<input type="checkbox" id="on_off_on"/>
														</div>
													</div>
													<div class="form_grid_9">
														<label class="field_title" style="font-size:0.8rem;"><a href="javascript:void(0);">Edit bank details</a></label>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											
											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Primary Signature</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text" placeholder="Provider Signature"/>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											
											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Secondary Signature</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text" placeholder="Receiver Signature"/>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											
											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">Your Signature</label>
												<div class="form_input">
														<div class="uploader" id="uniform-undefined">
															<input name="file01" type="file" size="19" style="opacity: 0;">
															<span class="filename">No file selected</span>
															<span class="action">Choose File</span>
														</div>
														<span class=" label_intro">This signature will appear in the documents(invoices,quotes,etc.)<br/>Preferred image size: 240px x 80px, @72 DPI</span>
													<span class="clear"></span>
													
												</div>
											</div>

											<div class="form_grid_12" style="margin-top:5px;">
												<label class="field_title">End financial year on</label>
												<div class="form_input">
													<div class=" form_grid_2 alpha">
														<input name="filed30" type="text" class="datepicker"/>
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