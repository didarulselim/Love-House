
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
	<link rel="shortcut icon" type="image/png" href="assets/images/fevicon1.png">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">




    <title>House Reant ! Find Your Dreem House Rent</title>
  </head>
  <body onload="myFunction()" style="margin:0;">
  	<div id="loader">
  		<h1>We are finding all available near you ....</h1>
  	</div>

   <Section class="service col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 " style="display:none;" id="myDiv">
   	<div class="container">
   		<div class="row">
   			<div class="service-contant text-center">
		   		<h1>Find Your Dream House</h1>
		   		<p>We are finding all available near you.</p>
		   		<b class="d-inline-flex"><i class="fas fa-map-marker-alt"></i><span class="location"></span></b>
		   	</div>
		   	<div class="service-list ">
		   		<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-1" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-1">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-1">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-1">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-1" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-1" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$75 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-1">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-1"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-1" tabindex="-1" aria-labelledby="service-1" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-1" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-1" class="box-2"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-1"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-1"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-1"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($75) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>
			<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-2" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-2">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-2">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-2">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-2" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-2" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$82 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-2">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-2"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-2" tabindex="-1" aria-labelledby="service-2" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-3" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-2" class="box-4"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-2"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-2"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-2"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($82) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>
   		

   		<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-3" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-3">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-3">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-3">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-3" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-3" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$88 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-3">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-3"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-3" tabindex="-1" aria-labelledby="service-3" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-5" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-3" class="box-6"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-3"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-3"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-3"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($88) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>

			<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-4" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-4">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-4">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-4">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-4" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-4" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$94 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-4">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-4"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-4" tabindex="-1" aria-labelledby="service-4" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-7" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-4" class="box-8"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-4"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-4"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-4"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($94) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>


			<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-5" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-5">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-5">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-5">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-5" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-5" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$108 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-5">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-5"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-5" tabindex="-1" aria-labelledby="service-5" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-9" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-5" class="box-10"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-5"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-5"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-5"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($108) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>

			<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-6" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-6">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-6">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-6">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-6" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-6" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$120 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-6">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-6"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-6" tabindex="-1" aria-labelledby="service-6" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-11" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-6" class="box-12"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-6"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-6"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-6"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($120) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>

			<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-7" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-7">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-7">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-7">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-7" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-7" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$124 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-7">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-7"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-7" tabindex="-1" aria-labelledby="service-7" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-13" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-7" class="box-14"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-7"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-7"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-7"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($124) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div><div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-8" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-8">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-8">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-8">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-8" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-8" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$128 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-8">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-8"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-8" tabindex="-1" aria-labelledby="service-8" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-15" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-8" class="box-16"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-8"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-8"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-8"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($128) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div><div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-9" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-9">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-9">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-9">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-9" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-9" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$132 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-9">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-9"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-9" tabindex="-1" aria-labelledby="service-9" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-17" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-9" class="box-18"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-9"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-9"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-9"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($132) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>
			<div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-10" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-10">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-10">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-10">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-10" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-10" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$136 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-10">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-10"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-10" tabindex="-1" aria-labelledby="service-10" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-19" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-10" class="box-20"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-10"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-10"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-10"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($136) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div><div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-11" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-11">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-11">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-11">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-11" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-11" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$140 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-11">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-11"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-11" tabindex="-1" aria-labelledby="service-11" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-21" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-11" class="box-22"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-11"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-11"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-11"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($140) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div><div class="col-md-6 col-12 col-xs-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4 p-3">
		   			<div class="card" >
					  <div class="service-list-slide">
					  	<div id="carousel-12" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="assets/images/1.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-12">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/2.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-12">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/3.jpg" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#service-12">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-12" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carousel-12" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>							
					  </div>				
					  <div class="card-body">
					  	<h5 class="card-price">$144 /<sub>Day</sub></h5>
					    <h5 class="card-title"><a href="#"  data-bs-toggle="modal" data-bs-target="#service-12">Family Apartment Eight</a></h5>
					    

					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					    <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="fas fa-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="fas fa-bath"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="fas fa-vector-square"></i></span>
                                    square Ft
                                </li>
                            </ul>
                            <a href="#" class="btn btn-color text-white" data-bs-toggle="modal" data-bs-target="#service-12"> Request Booking </a>
					  </div>
					</div>
		   		</div>

		   		
			<div class="modal fade" id="service-12" tabindex="-1" aria-labelledby="service-12" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div id="overlay"></div>
						
						<form action="thanks.php" method="post" class="container booking" name="booking">
							<div class="header">
								<div class="location-name">
									<h2>Family Apartment Eight</h2>
								</div>
							</div>
							
					    
							<div class="dates p-3" data-type="none">
						      <label for="name">Full Name</label>
						    <div class="input-text">      
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								<label for="number">Phone Number</label>
						    	<div class="input-text">      
									<input type="text" name="number" placeholder="+99(99)9999-9999" required="">
								</div>
								<label for="email">Email Adderss</label>
						    	<div class="input-text">      
									<input type="email" name="email" placeholder="Your Email" required="">
								</div>
								<label for="date">Check in</label>
								<div class="input-text">
									<input id="from" type="date" name="date" required="">
								</div>

								<label for="selection">Select Your Day</label>
									<select name="selection" id="days" class="input-text box-23" style="width: 100%;">
										<option value="0 Day" selected>0</option>
										<option value="1 Day" >1</option>
										<option value="2 Day">2</option>
										<option value="3 Day">3</option>
										<option value="4 Day">4</option>
										<option value="5 Day">5</option>
										<option value="6 Day">6</option>
										<option value="7 Day">7</option>
										<option value="8 Day">8</option>
										<option value="9 Day">9</option>
										<option value="10 Day">10</option>
										<option value="11 Day">11</option>
										<option value="12 Day">12</option>
										<option value="13 Day">13</option>
										<option value="14 Day">14</option>
										<option value="15 Day">15</option>
										<option value="16 Day">16</option>
										<option value="17 Day">17</option>
										<option value="18 Day">18</option>
										<option value="19 Day">19</option>
										<option value="20 Day">20</option>
										<option value="21 Day">21</option>
										<option value="22 Day">22</option>
										<option value="23 Day">23</option>
										<option value="24 Day">24</option>
										<option value="25 Day">25</option>
										<option value="26 Day">26</option>
										<option value="27 Day">27</option>
										<option value="28 Day">28</option>
										<option value="29 Day">29</option>
										<option value="30 Day">30</option>
										<option value="31 Day">31</option>
									</select>
								<div class="output-text">
									<p>Total:  <span id="output-12" class="box-24"></span> days.</p>
								</div>
								<div class="output-text " >
									<p>Total:  <input type="text" name="usd" id="usd-amount-12"  placeholder="0.00"/> USD.</p>
								</div>
								<!-- <div class="amount-field" >
							          <label for="usd">$USD:</label>
							        <div class="usd-amount input-text">
							          <input type="text" name="usd" id="usd-amount-12"  placeholder="0.00"/>
							        </div>
							          <label for="btc">BTC:</label>
							        <div class="btc-amount input-text" >
							          <input type="text" name="btc" id="btc-amount-12"  placeholder="0.00" />
							        </div>
							      </div> -->
							      <p class="available pt-3"><b style="color: red;">*</b> Available to send: <span>($144) For Per Day.</span></p>
								</div>
								<div class="payment-contant text-center">
					   				<div class="btc-logo">
					   					<img src="assets/images/btc-wh.png" alt="">
					   				</div>
							   		<h1>Payment Address</h1>
							   		<p>You can send BTC to the following address.</p>
							   		<p class="p-3 address">1Li4VTZRD3oPqWFhZhTsxmjjePd5b1Rh7s</p>
							   		<div class="bq">
							   			<img src="assets/images/btc-bq.png" alt="">
							   		</div>
							   		<p class="scan-pre">Scan QR code and top-up your <br>
							   		Bitcoin balance for any amount. <br>
							   		payment will be credited after 1 confirmation.</p>
							   		<p>Payment problem? <a href="help.html">Click Here.</a></p>
						   	</div>
						   	<a href="thanks.html" class="btn btn-color text-white btn-big p-0"> <button type="submit"  value="send" class="btn btn-color text-white btn-big p-2" style="font-size: 20px;">Confirm</button></a>						
						</form>
			      </div>
			      
			    </div>
			  </div>
			</div>



			</div>
   		</div>
   		</div>					
   </Section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.js" ></script>
    <script src="assets/js/bootstrap.js" ></script>
    <script src="assets/js/jquery.min.js" ></script>

    <script>
  $(".box-1").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-2").val(selected);
    $('#output-1').html(selected);
  $('#usd-amount-1').val(selected * 75);
  // $('#btc-amount-1').val((selected * 75) * 0.000025);
});
  $(".box-3").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-4").val(selected);
    $('#output-2').html(selected);
  $('#usd-amount-2').val(selected * 82);
  // $('#btc-amount-2').val((selected * 82) * 0.000025);
});
  $(".box-5").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-6").val(selected);
    $('#output-3').html(selected);
  $('#usd-amount-3').val(selected * 88);
  // $('#btc-amount-3').val((selected * 88) * 0.000025);
});
    $(".box-7").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-8").val(selected);
    $('#output-4').html(selected);
  $('#usd-amount-4').val(selected * 94);
  // $('#btc-amount-4').val((selected * 94) * 0.000025);
});
    $(".box-9").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-10").val(selected);
    $('#output-5').html(selected);
  $('#usd-amount-5').val(selected * 108);
  // $('#btc-amount-5').val((selected * 108) * 0.000025);
});
    $(".box-11").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-12").val(selected);
    $('#output-6').html(selected);
  $('#usd-amount-6').val(selected * 120);
  // $('#btc-amount-6').val((selected * 120) * 0.000025);
});
    $(".box-13").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-14").val(selected);
    $('#output-7').html(selected);
  $('#usd-amount-7').val(selected * 124);
  // $('#btc-amount-7').val((selected * 124) * 0.000025);
});
    $(".box-15").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-16").val(selected);
    $('#output-8').html(selected);
  $('#usd-amount-8').val(selected * 128);
  // $('#btc-amount-8').val((selected * 128) * 0.000025);
});
    $(".box-17").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-18").val(selected);
    $('#output-9').html(selected);
  $('#usd-amount-9').val(selected * 132);
  // $('#btc-amount-9').val((selected * 132) * 0.000025);
});
    $(".box-19").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-20").val(selected);
    $('#output-10').html(selected);
  $('#usd-amount-10').val(selected * 136);
  // $('#btc-amount-10').val((selected * 136) * 0.000025);
});
    $(".box-21").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-22").val(selected);
    $('#output-11').html(selected);
  $('#usd-amount-11').val(selected * 140);
  // $('#btc-amount-11').val((selected * 140) * 0.000025);
});
    $(".box-23").change(function () {
    var selected = $(this).find("option:selected").text();
    $(".box-24").val(selected);
    $('#output-12').html(selected);
  $('#usd-amount-12').val(selected * 144);
  // $('#btc-amount-12').val((selected * 144) * 0.000025);
});
    </script>

		<script>
		var myVar;

		function myFunction() {
		  myVar = setTimeout(showPage, 4000);
		}

		function showPage() {
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("myDiv").style.display = "block";
		}
		</script>
		<Script>
    	var $locationText = $(".location");

	// Check for geolocation browser support and execute success method
	if (navigator.geolocation) {
  	navigator.geolocation.getCurrentPosition(
    geoLocationSuccess,
    geoLocationError,
    { timeout: 10000 }
  	);
		} else {
	  alert("your browser doesn't support geolocation");
	}
	function geoLocationSuccess(pos) {
  // get user lat,long
  var myLat = pos.coords.latitude,
    myLng = pos.coords.longitude,
    loadingTimeout;

  var loading = function () {
    $locationText.text("fetching...");
  };

  loadingTimeout = setTimeout(loading, 600);

  var request = $.get(
    "https://nominatim.openstreetmap.org/reverse?format=json&lat=" +
      myLat +
      "&lon=" +
      myLng
  )
    .done(function (data) {
      if (loadingTimeout) {
        clearTimeout(loadingTimeout);
        loadingTimeout = null;
        $locationText.text(data.display_name);
      }
    })
    .fail(function () {
      // handle error
    });
}

function geoLocationError(error) {
  var errors = {
    1: "Permission denied",
    2: "Position unavailable",
    3: "Request timeout"
  };
  alert("Error: " + errors[error.code]);
}
    </Script>

		
	
    


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>