<!DOCTYPE html>
<?php
include 'cone.php';
session_start();

if(isset($_POST['login']))
{ 

	
	$user=$_POST['user'];
	$password=$_POST['password'];
	


	$query="select * from admin_login where username='$user'";
	
	$query1=mysqli_query($cn,$query);
	$query2=mysqli_fetch_array($query1);
	if($user==$query2['username']&&$password==$query2['password'])
	{	
		
		header("Location: home.html"); 
	}
}
?>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body  style="background-color:rgb(242, 242, 242)">
    <nav class="navbar navbar-fixe-top navbar-defult"  style="background-color:rgb(0, 204, 204)">
      <div class="container">
			
        <div class="row">
			<div class="col-lg-2" style="padding-top:20px;">
				<img src="company1.jpg" width="120x">
				
				
			</div>
			<div class="col-lg-4">
			</div>
			<div  class="col-lg-6" style="padding-top:8px;">
				<div class="col-lg-5">
					<form method="post">
						
							<label for="usr">Name:</label>
							<input type="text" class="form-control" id="usr" name="user" placeholder="User Name">
						
				</div>
				
				<div class="col-lg-5">
				
						
							<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
								<p>Forget your Password?</p>
						
					
				</div>
				
				<div class="col-lg-2" style="padding-top:24px;">
						<input type="submit" id="login" name="login" value="Login" class="btn btn-primary pull-right"></button>
					</form>
				</div>
		
			</div>
		
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	

    <!-- Page Content -->
	<div class="container" style="padding-left:20px;">
		<div class="row"> 
			<div class="col-lg-7" style="padding-left:30px;" style="padding-top:30px;">
			<br>
				<h3><b>DuraCloud helps you connect and share with the people in your life.</b>
				<br>
				<div  style="padding-top:40px;" >
					<img class="img-responsive" src="" alt="" width="537" height="195" />
			
				</div>
			</div>
			<div class="col-lg-5" >
				<h3> <b>Create an account
				<h4>It's free and always will be.
				<br>
				<br>
					<div class="col-lg-6">
						<form method="Post">						
						
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
					</div>
				
					<div class="col-lg-6">
					 
							<input type="text"  class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
											
					</div>
					
					<div class="col-lg-12" style="padding-top:10px;">
				
							<input type="text"  class="form-control" id="email" name="email" placeholder="Mobile Number Or Email Address" required>
											
					</div>
					<div class="col-lg-12" style="padding-top:10px;">
					
							<input type="Password"  class="form-control" id="password" name="password" placeholder="New Password" required>
											
					</div>
					<div class="col-lg-12" style="padding-top:20px; padding-left:5px;">
						<P><b>Birthday</b>
						<div class="col-lg-3" >
				
							 
							
							<select  class="form-control">
							
								  <option>Date</option>
								  <option >1</option>
								  <option >2</option>
								  <option >3</option>
								  <option >4</option>
								  <option >5</option>
								  <option >6</option>
								  <option >7</option>
								  <option >8</option>
								  <option >9</option>
								  <option >10</option>
								  <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
							</select>
						</div>
							<div class="col-lg-3" >
				
							 
							
							<select  class="form-control">
							
								  <option>Month</option>
								  <option >Jan</option>
								  <option >Feb</option>
								  <option >March</option>
								  <option >April</option>
								  <option >May</option>
								  <option >June</option>
								  <option >July</option>
								  <option >August</option>
								  <option >September</option>
								  <option >October</option>
								  <option >Novembermber</option>
								  <option >December</option>
							</select>
						</div>
							<div class="col-lg-3" >
				
							 
							
							<select  class="form-control">
							
								<option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select></span>
							
						</div>
					
				</div>
				<div class="col-lg-7">
					<br>
					<input type ="radio" name="gender"> &nbsp  Male</input>&nbsp &nbsp 
					<input type ="radio"name="gender"> &nbsp Female</input>
					
					
				</div>
				<br>
				
				<div class="col-lg-12" style="padding-top:20px;">
					<p style="font-size:15px; color:gray;">By clicking Create an account, you agree to our <a>Terms</a> and confirm that you have read our <a>Data Policy</a>, including our<a> Cookie Use Policy</a>. You may receive SMS message notifications from DuraCloud and can opt out at any time.</p>
				</div>
				<div class="col-lg-8" style="padding-top:20px;">
							<input type="submit" name="submit" value="Create Account" class="btn btn-success "></button>
					</form>
				</div>
			</div>
		</div>
	</div>	
<br>	
<br>	
      <footer class="text-muted well" id="last-footer">
		<section>
		<div class="row" style="font-size:11px;">
		<div class="container">
		<h3 class="subhead" style="text-align:center;">All We Need Is Your Love</h3>
		   <div class="col-md-9">
        <div class="row" >
			<div class="col-md-3">
			<div class="row footlinks">
			<div class="col-xs-12">
			<h5>About School</h5>
			<ul class="noBullets">
			<li><i class="fa fa-angle-right"></i><a href="#">History</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Location</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Faculty</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Architecture</a></li>
			</ul>
			</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="row footlinks">
			<div class="col-xs-12">
			<h5>Join Us</h5>
			<ul class="noBullets">
			<li><i class="fa fa-angle-right"></i><a href="#">Facbook Page</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Follow Twitter</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Google Plus</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">E-Mail</a></li>
			</ul>
			</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="row footlinks">
			<div class="col-xs-12">
			<h5>Facilities</h5>
			<ul class="noBullets">
			<li><i class="fa fa-angle-right"></i><a href="#">Transport Facility</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">AC Classrooms</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Monthly Trips</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Computer Lab</a></li>
			</ul>
			</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="row footlinks">
			<div class="col-xs-12">
			<h5>Access Links</h5>
			<ul class="noBullets">
			<li><i class="fa fa-angle-right"></i><a href="#">Future Plans</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Objectives</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Achievements</a></li>
			<li><i class="fa fa-angle-right"></i><a href="#">Honours</a></li>
			</ul>
			</div>
			</div>
			</div>
			<hr/>			
        </div><!--/.row inner--> 
		</div>
		 <div class="col-md-3 subscribe">
		 <div class="row">
		 <div class="col-xs-12">
		 <form class="form-inline" role="form">
		 <ul class="noBullets">
		<h5>Subscribe Newsletters!</h5>
		 <li>
		 <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
		</div>
				  </li>
				  <li class="text-center">
				  <button type="submit" class="btn btn-primary btn-sm">Subscribe Now!</button>
				  </li>
				  </ul>		
				</form>		
		</div></div>		
		 </div>
		
    
		<div class="row">
			<div class="container text-center">
				<h5>All Rights Reserved © 2014.<a href="mailto:chance2seo@gmail.com">Passionate Rahul</a></h5>
			</div>
			</div>
			 </div><!--/.container--> 
			 </div><!--/.row outer--> 
		</section>
				</footer>				
      
    <!-- /.container -->

    <!-- jQuery -->
 

</body>

</html>
