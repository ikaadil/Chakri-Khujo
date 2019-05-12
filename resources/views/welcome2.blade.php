<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width">
	<title>
		Chakri Khujo | Welcome 
	</title>
	<link rel="stylesheet" type="text/css" href="../front/css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Chakri</span> Khujo</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="{{route('welcome2')}}">Home</a></li>
					<li><a href="{{route('hotjobs')}}">Hot Jobs</a></li>
					<li><a href="{{route('intership')}}">InternShip</a></li>
					<li><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('apply')}}">Apply</a></li>
					<?php

                      $role = Auth::user()->usertype;

                      if($role=="Company")
                      {
                          echo '<li><a href="/insert_job">Job Post</li>';
                      }
                    ?>
					<li><a href="{{route('service')}}">Services</a><{{route('about')}}/li>
					@if (Route::has('login'))
                
                    @auth
                        <li><a href="{{ url('/home') }}">Logout</a></li>
                    @else
                      <li>  <a href="{{ route('login') }}">Login  </a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">  Register</a></li>
                        @endif
                    @endauth
               
            @endif
        
				</ul>
			</nav>			
		</div>
	</header>
	<section id="showcase">
		<div class="container">
			<h1>Find The Right Job For You</h1>
				
			
		</div>	
	</section>
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe to our newsletter</h1>
			<form>
				<input type="email" name="Enter Email...">
				<button type="submit" class="button_1">Subscribe</button>
			</form>
		</div>
	</section>
	<section id="boxes">
		<div class="container">
			<div class="box">
				<h2>Browse Category</h2>
			</div>
			<ul class="category">
				<li><a href={{route('jobs_accounting')}}>Accounting/Finance</a></li>
				<li><a href={{route('jobs_bank')}}>Bank/ Non-Bank Fin. Institution</a></li>
				<li><a href={{route('jobs_commercial')}}>Commercial/Supply Chain</a></li>
				<li><a href={{route('jobs_education')}}>Education/Training</a></li>
				<li><a href={{route('jobs_engineer')}}>Engineer/Architects</a></li>
				<li><a href={{route('jobs_garments')}}>Garments/Textile</a></li>
				<li><a href={{route('jobs_hr')}}>HR/Org. Development</a></li>
				<li><a href={{route('jobs_admin')}}>Gen Mgt/Admin</a></li>
			</ul>
			<div class="box">
			<ul class="category">
				<li><a href={{route('jobs_design')}}>Design/Creative</a></li>
				<li><a href={{route('jobs_travel')}}>Hospitality/ Travel/ Tourism</a></li>
				<li><a href={{route('jobs_beauty')}}>Beauty Care/ Health & Fitness</a></li>
				<li><a href={{route('jobs_electrician')}}>Electrician/ Construction/ Repair </a></li>
				<li><a href={{route('jobs_it')}}>IT & Telecommunication</a></li>
				<li><a href={{route('jobs_marketing')}}>Marketing/Sales</a></li>
				<li><a href={{route('jobs_customer')}}>Customer Support/Call Centre</a></li>
				<li><a href={{route('jobs_media')}}>Media/Ad./Event Mgt.</a></li>
			</ul>
			</div>
			<div class="box">
			<ul class="category">
				<li><a href={{route('jobs_medical')}}>Medical/Pharma</a></li>
				<li><a href={{route('jobs_agro')}}>Agro (Plant/Animal/Fisheries)</a></li>
				<li><a href={{route('jobs_ngo')}}>NGO/Development</a></li>
				<li><a href={{route('jobs_research')}}>Research/Consultancy </a></li>
				<li><a href={{route('jobs_secretary')}}>Secretary/Receptionist</a></li>
				<li><a href={{route('jobs_driving')}}>Driving/Motor Technician</a></li>
				<li><a href={{route('jobs_security')}}>Security/Support Service</a></li>
				<li><a href={{route('jobs_law')}}>Law/Legal</a></li>
				
			</ul>
			</div>
		</div>
	</section>
	<footer>
		<p>Chakri Khujo, Copyright &copy; 2019</p>
	</footer>
</body>
</html>