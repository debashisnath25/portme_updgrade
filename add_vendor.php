
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Add Vendor</title>
<?php include("metalinks.php");?><!-- Jquery -->

</head>
<body id="theme-default" class="full_block">
<div id="container">
<?php include("header.php");?>
	<?php include("navbar.php");?>
	<div id="content">
		<div class="grid_container">
			<div class="grid_12 full_block">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add Vendor</h6>
					</div>
					<div class="widget_content">
						<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<legend>Company Information</legend>
										<ul>
											<li>
											<div class="form_grid_12">
												<label class="field_title">Company Name</label>
												<div class="form_input">
													<div class="form_grid_10 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											
											<div class="form_grid_12">
												<label class="field_title">Phone</label>
												<div class="form_input">
													<div class="form_grid_10 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro"></span>
													</div>
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
									</fieldset>
									</li>
								</ul>
							</div>

							<div class="elem_extend">
								<ul>
									<li>
									<fieldset>
										<legend>Personal Information</legend>
										<ul>
											<li>
											<div class="form_grid_12">
												<label class="field_title">Name</label>
												<div class="form_input">
													<div class="form_grid_6 alpha">
														<input name="firstname" type="text"/>
														<span class=" label_intro">First Name</span>
													</div>
													<div class="form_grid_6 ">
														<input name="lastname" type="text"/>
														<span class=" label_intro">Last Name</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Address</label>
												<div class="form_input">
													<div class="form_grid_6 alpha">
														<input name="streetaddress" type="text"/>
														<span class=" label_intro">Street Address</span>
													</div>
													<div class="form_grid_6 ">
														<input name="address2" type="text"/>
														<span class=" label_intro">Address Line 2</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_6 alpha">
														<input name="city" type="text"/>
														<span class=" label_intro">City</span>
													</div>
													<div class="form_grid_6 ">
														<input name="state" type="text"/>
														<span class=" label_intro">State / Province / Region</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_6 alpha">
														<input name="zipcode" type="text"/>
														<span class=" label_intro">Postal / Zip Code</span>
													</div>
													<div class="form_grid_6 ">
														<select data-placeholder="Choose a Country..." class="chzn-select full" name="Field109" tabindex="20">
															<option value=""></option>
															<option value="United States">United States</option>
															<option value="United Kingdom">United Kingdom</option>
															<option value="Australia">Australia</option>
															<option value="Canada">Canada</option>
															<option value="France">France</option>
															<option value="New Zealand">New Zealand</option>
															<option value="India">India</option>
															<option value="Brazil">Brazil</option>
															<option value="----">----</option>
															<option value="Afghanistan">Afghanistan</option>
															<option value="Åland Islands">Åland Islands</option>
															<option value="Albania">Albania</option>
															<option value="Algeria">Algeria</option>
															<option value="American Samoa">American Samoa</option>
															<option value="Andorra">Andorra</option>
															<option value="Angola">Angola</option>
															<option value="Anguilla">Anguilla</option>
															<option value="Antarctica">Antarctica</option>
															<option value="Antigua and Barbuda">Antigua and Barbuda</option>
															<option value="Argentina">Argentina</option>
															<option value="Armenia">Armenia</option>
															<option value="Aruba">Aruba</option>
															<option value="Austria">Austria</option>
															<option value="Azerbaijan">Azerbaijan</option>
															<option value="Bahamas">Bahamas</option>
															<option value="Bahrain">Bahrain</option>
															<option value="Bangladesh">Bangladesh</option>
															<option value="Barbados">Barbados</option>
															<option value="Belarus">Belarus</option>
															<option value="Belgium">Belgium</option>
															<option value="Belize">Belize</option>
															<option value="Benin">Benin</option>
															<option value="Bermuda">Bermuda</option>
															<option value="Bhutan">Bhutan</option>
															<option value="Bolivia">Bolivia</option>
															<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
															<option value="Botswana">Botswana</option>
															<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
															<option value="Brunei Darussalam">Brunei Darussalam</option>
															<option value="Bulgaria">Bulgaria</option>
															<option value="Burkina Faso">Burkina Faso</option>
															<option value="Burundi">Burundi</option>
															<option value="Cambodia">Cambodia</option>
															<option value="Cameroon">Cameroon</option>
															<option value="Cape Verde">Cape Verde</option>
															<option value="Cayman Islands">Cayman Islands</option>
															<option value="Central African Republic">Central African Republic</option>
															<option value="Chad">Chad</option>
															<option value="Chile">Chile</option>
															<option value="China">China</option>
															<option value="Colombia">Colombia</option>
															<option value="Comoros">Comoros</option>
															<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
															<option value="Republic of the Congo">Republic of the Congo</option>
															<option value="Cook Islands">Cook Islands</option>
															<option value="Costa Rica">Costa Rica</option>
															<option value="C&ocirc;te d'Ivoire">C&ocirc;te d'Ivoire</option>
															<option value="Croatia">Croatia</option>
															<option value="Cuba">Cuba</option>
															<option value="Cyprus">Cyprus</option>
															<option value="Czech Republic">Czech Republic</option>
															<option value="Denmark">Denmark</option>
															<option value="Djibouti">Djibouti</option>
															<option value="Dominica">Dominica</option>
															<option value="Dominican Republic">Dominican Republic</option>
															<option value="East Timor">East Timor</option>
															<option value="Ecuador">Ecuador</option>
															<option value="Egypt">Egypt</option>
															<option value="El Salvador">El Salvador</option>
															<option value="Equatorial Guinea">Equatorial Guinea</option>
															<option value="Eritrea">Eritrea</option>
															<option value="Estonia">Estonia</option>
															<option value="Ethiopia">Ethiopia</option>
															<option value="Faroe Islands">Faroe Islands</option>
															<option value="Fiji">Fiji</option>
															<option value="Finland">Finland</option>
															<option value="Gabon">Gabon</option>
															<option value="Gambia">Gambia</option>
															<option value="Georgia">Georgia</option>
															<option value="Germany">Germany</option>
															<option value="Ghana">Ghana</option>
															<option value="Greece">Greece</option>
															<option value="Grenada">Grenada</option>
															<option value="Guatemala">Guatemala</option>
															<option value="Guinea">Guinea</option>
															<option value="Guinea-Bissau">Guinea-Bissau</option>
															<option value="Guyana">Guyana</option>
															<option value="Haiti">Haiti</option>
															<option value="Honduras">Honduras</option>
															<option value="Hong Kong">Hong Kong</option>
															<option value="Hungary">Hungary</option>
															<option value="Iceland">Iceland</option>
															<option value="Indonesia">Indonesia</option>
															<option value="Iran">Iran</option>
															<option value="Iraq">Iraq</option>
															<option value="Ireland">Ireland</option>
															<option value="Israel">Israel</option>
															<option value="Italy">Italy</option>
															<option value="Jamaica">Jamaica</option>
															<option value="Japan">Japan</option>
															<option value="Jordan">Jordan</option>
															<option value="Kazakhstan">Kazakhstan</option>
															<option value="Kenya">Kenya</option>
															<option value="Kiribati">Kiribati</option>
															<option value="North Korea">North Korea</option>
															<option value="South Korea">South Korea</option>
															<option value="Kuwait">Kuwait</option>
															<option value="Kyrgyzstan">Kyrgyzstan</option>
															<option value="Laos">Laos</option>
															<option value="Latvia">Latvia</option>
															<option value="Lebanon">Lebanon</option>
															<option value="Lesotho">Lesotho</option>
															<option value="Liberia">Liberia</option>
															<option value="Libya">Libya</option>
															<option value="Liechtenstein">Liechtenstein</option>
															<option value="Lithuania">Lithuania</option>
															<option value="Luxembourg">Luxembourg</option>
															<option value="Macedonia">Macedonia</option>
															<option value="Madagascar">Madagascar</option>
															<option value="Malawi">Malawi</option>
															<option value="Malaysia">Malaysia</option>
															<option value="Maldives">Maldives</option>
															<option value="Mali">Mali</option>
															<option value="Malta">Malta</option>
															<option value="Marshall Islands">Marshall Islands</option>
															<option value="Mauritania">Mauritania</option>
															<option value="Mauritius">Mauritius</option>
															<option value="Mexico">Mexico</option>
															<option value="Micronesia">Micronesia</option>
															<option value="Moldova">Moldova</option>
															<option value="Monaco">Monaco</option>
															<option value="Mongolia">Mongolia</option>
															<option value="Montenegro">Montenegro</option>
															<option value="Morocco">Morocco</option>
															<option value="Mozambique">Mozambique</option>
															<option value="Myanmar">Myanmar</option>
															<option value="Namibia">Namibia</option>
															<option value="Nauru">Nauru</option>
															<option value="Nepal">Nepal</option>
															<option value="Netherlands">Netherlands</option>
															<option value="Netherlands Antilles">Netherlands Antilles</option>
															<option value="Nicaragua">Nicaragua</option>
															<option value="Niger">Niger</option>
															<option value="Nigeria">Nigeria</option>
															<option value="Norway">Norway</option>
															<option value="Oman">Oman</option>
															<option value="Pakistan">Pakistan</option>
															<option value="Palau">Palau</option>
															<option value="Panama">Panama</option>
															<option value="Papua New Guinea">Papua New Guinea</option>
															<option value="Paraguay">Paraguay</option>
															<option value="Peru">Peru</option>
															<option value="Philippines">Philippines</option>
															<option value="Poland">Poland</option>
															<option value="Portugal">Portugal</option>
															<option value="Puerto Rico">Puerto Rico</option>
															<option value="Qatar">Qatar</option>
															<option value="Romania">Romania</option>
															<option value="Russia">Russia</option>
															<option value="Rwanda">Rwanda</option>
															<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
															<option value="Saint Lucia">Saint Lucia</option>
															<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
															<option value="Samoa">Samoa</option>
															<option value="San Marino">San Marino</option>
															<option value="Sao Tome and Principe">Sao Tome and Principe</option>
															<option value="Saudi Arabia">Saudi Arabia</option>
															<option value="Senegal">Senegal</option>
															<option value="Serbia and Montenegro">Serbia and Montenegro</option>
															<option value="Seychelles">Seychelles</option>
															<option value="Sierra Leone">Sierra Leone</option>
															<option value="Singapore">Singapore</option>
															<option value="Slovakia">Slovakia</option>
															<option value="Slovenia">Slovenia</option>
															<option value="Solomon Islands">Solomon Islands</option>
															<option value="Somalia">Somalia</option>
															<option value="South Africa">South Africa</option>
															<option value="Spain">Spain</option>
															<option value="Sri Lanka">Sri Lanka</option>
															<option value="Sudan">Sudan</option>
															<option value="Suriname">Suriname</option>
															<option value="Swaziland">Swaziland</option>
															<option value="Sweden">Sweden</option>
															<option value="Switzerland">Switzerland</option>
															<option value="Syria">Syria</option>
															<option value="Taiwan">Taiwan</option>
															<option value="Tajikistan">Tajikistan</option>
															<option value="Tanzania">Tanzania</option>
															<option value="Thailand">Thailand</option>
															<option value="Togo">Togo</option>
															<option value="Tonga">Tonga</option>
															<option value="Trinidad and Tobago">Trinidad and Tobago</option>
															<option value="Tunisia">Tunisia</option>
															<option value="Turkey">Turkey</option>
															<option value="Turkmenistan">Turkmenistan</option>
															<option value="Tuvalu">Tuvalu</option>
															<option value="Uganda">Uganda</option>
															<option value="Ukraine">Ukraine</option>
															<option value="United Arab Emirates">United Arab Emirates</option>
															<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
															<option value="Uruguay">Uruguay</option>
															<option value="Uzbekistan">Uzbekistan</option>
															<option value="Vanuatu">Vanuatu</option>
															<option value="Vatican City">Vatican City</option>
															<option value="Venezuela">Venezuela</option>
															<option value="Vietnam">Vietnam</option>
															<option value="Virgin Islands, British">Virgin Islands, British</option>
															<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
															<option value="Yemen">Yemen</option>
															<option value="Zambia">Zambia</option>
															<option value="Zimbabwe">Zimbabwe</option>
														</select>
														<span class=" label_intro">Country</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Contact Number</label>
												<div class="form_input">
													<div class="form_grid_6 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Phone</span>
													</div>
													<div class="form_grid_6">
														<input name="phone" type="email"/>
														<span class=" label_intro">Email</span>
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
		<span class="clear"></span>
	</div>
</div>
<?php include("footer.php");?>
</body>
</html>