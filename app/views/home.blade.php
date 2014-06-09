@extends('layouts.home_master')
@section('content')
<body>
    @include('headers.home')
    
	<section class="marketplace-top">
        <div id="market-wrapper">
            <div class="container">
                <header class="text-center">
                    <h1>Find your partners<br>
                     and suppliers faster with SigmaChain.</h1>
                <p class="mbuttons">
                    <a id="registration-thumb" class="dmbutton">Register</a>
                    <a id="login-thumb" class="dmbutton">Login</a>
                </p>
                    <img data-effect="fade" class="aligncenter" width="1260" height="400" src="bootstrap/front_end/demos/market_single_01.png" alt="">
                </header>
            </div>
		</div><!-- end post-wrapper-top -->
    </section>

	<section class="section2">
		<div class="message text-center">
            <h2 class="big-title">Design Creates An <span>Emotional</span> Connection.</h2>
            <p class="small-title">There’s more to design than meets the eye.<br/>It’s when it meets the heart that design creates a meaningful connection with the audience.</p>
            <a class="button large" href="pricing-tables.html">VIEW PRICING DETAILS</a>
		</div><!-- end message -->
	</section><!-- end section3 -->
            
    <section class="section1">
    	<div class="container clearfix">
            <div class="col-md-1"></div>
			<div class="content col-md-9 home-page-registration">
                <h3 id="registration-title" class="text-center text-info">Company Registration</h3>
                <form action="/register" method="POST" class="form-horizontal" role="form" id="main-registration-form">
                    <hr>
                    <div class="form-group">
                        <label for="company-name-input" class="col-sm-3 control-label">
                            Company Name
                        </label>
                        <div class="col-sm-8">
                            <input name="name" id ="company-name-input" type="text" placeholder="Company Name" class="form-control">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="company-email" class="col-sm-3 control-label">Company Email</label>
                        <div class="col-sm-8">
                            <input name = "email" type="email" id="company-email" class="form-control" placeholder="Email" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company-email-confirm" class="col-sm-3 control-label">Confirm Email</label>
                        <div class="col-sm-8">
                            <input name="email-confirm" type="email" id="company-email-confirm" class="form-control" placeholder="Confirm Email" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country-name-input" class="col-sm-3 control-label">
                            Residence Country
                        </label>
                        <div class="col-sm-8">
                            <select id ="country-name-input" name = "country" class="form-control">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US" selected="selected">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                    </div><!-- form group end -->   
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-8">
                            <input name = "password" type="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input name = "password-confirm" type="password" id="password-confirm" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company-description" class="col-sm-3 control-label">Company Description</label>
                        <div class="col-sm-8">
                            <textarea name = "about" class="form-control" name="description" id="company-description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" class="btn btn-block button large" value="Register">
                                </div>
                                <div class="col-sm-6">
                                    <input type="button" id="login-button" class="btn btn-block button large" value="Login">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                </form>
				
			</div><!-- end content -->
            <div class="col-md-2"></div> 
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">{{-- modal --}}
                <div id="login-modal" class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title text-center" id="myModalLabel">Login</h3>
                      </div>
                      <div class="modal-body">
                        <form action="/login" method="POST" role="form" id="login-form">
                            <div class="form-group">
                                <label for="login-email">Email address</label>
                                <input type="email" name="login-email" class="form-control" id="login-email" placeholder="Enter email" value="asmodianis@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="login-password">Password</label>
                                <input type="password" name="login-password" class="form-control" id="login-password" placeholder="Password" value="111111">
                            </div>
                            <div class="form-group">
                               <input type="submit" id="login-submit" class="btn btn-block button large" value="Login">
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>{{-- modal end--}}
		</div><!-- end container -->
	</section><!-- end section -->
	
	<section class="section3 withpadding">
		<div class="container">
                <div class="general-title text-center">
                    <h3>INCLUDED IN OUR Services</h3>
                    <p>Quality & Service are not just words for us.</p>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-left">
                                <a href="#" class=""> <i class="dm-icon fa fa-money fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>Affordable Price</h4>
                            <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div><!-- service-icon -->
                    </div><!-- servicebox -->
                </div><!-- large-3 -->
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="dm-icon fa fa-trophy fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>Best Quality</h4>
                            <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div><!-- service-icon -->
                    </div><!-- servicebox -->
                </div><!-- large-3 -->
                                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="dm-icon fa fa-heart-o fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>24/7 Support</h4>
                            <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                        </div><!-- service-icon -->
                    </div><!-- servicebox -->
                </div><!-- large-3 -->
                
    	</div><!-- end container -->
	</section><!-- end section -->
    
    <footer class="footer">
        <div class="container">
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">About us</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
                <a class="button small" href="#">read more</a>
            </div><!-- end widget -->
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">Recent Posts</h4>
				<ul class="recent_posts">
					<li>
                    	<a href="home1.html#">
						<img src="bootstrap/front_end/demos/recent_post_01.png" alt="" />Our New Dashboard Is Here
                        </a>
						<a class="readmore" href="#">read more</a>
					</li>
					<li>
                    	<a href="home1.html#">
						<img src="bootstrap/front_end/demos/recent_post_02.png" alt="" />Design Is In The Air
                        </a>
						<a class="readmore" href="#">read more</a>
					</li>
				</ul><!-- recent posts -->
            </div><!-- end widget -->  
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">Get In Touch</h4>
                <ul class="contact_details">
                	<li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
                	<li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
                	<li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
                	<li><a href="#"><i class="fa fa-map-marker"></i> View large map</a></li>
                </ul><!-- contact_details -->
            </div><!-- end widget -->  
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">Flickr Stream</h4>
				<ul class="flickr">
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_01.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_02.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_03.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_04.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_05.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_06.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_07.jpg"></a></li>
					<li><a href="#"><img alt="" src="bootstrap/front_end/demos/flickr_08.jpg"></a></li>
				</ul>
            </div><!-- end widget -->  
        </div><!-- end container -->
        
        @include('footers.copyright')
    </footer><!-- end footer -->
    <div class="dmtop">Scroll to Top</div>

      <!-- Main Scripts-->
    @include('js_footers.home')
</body>
@stop