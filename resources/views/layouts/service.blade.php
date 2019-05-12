<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width">
	<title>
		Chakri Khujo | Services
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
					<li><a href="{{route('welcome2')}}">Home</a></li>
					<li><a href="{{route('about')}}">About</a></li>
					<li class="current"><a href="services.html">Services</a></li>
				</ul>
			</nav>			
		</div>
	</header>
	
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe to our newsletter</h1>
			<form>
				<input type="email" name="Enter Email...">
				<button type="submit" class="button_1">Subscribe</button>
			</form>
		</div>
	</section>
	<section id="main">
		<div class=container>
			<article id="main-col">
				<h1 class="page-title">Services</h1>
				<ul id="services">
					<li>
						<h3>Job Posting</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore itaque, harum fugiat neque corporis sint dolore cupiditate rerum nesciunt sed laboriosam, temporibus ut. Obcaecati voluptas iure, aspernatur officia quisquam aperiam.</p>
						<p>Pricing: BDT 10,000</p>
					</li>
					<li>
						<h3>Company Ads</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore itaque, harum fugiat neque corporis sint dolore cupiditate rerum nesciunt sed laboriosam, temporibus ut. Obcaecati voluptas iure, aspernatur officia quisquam aperiam.</p>
						<p>Pricing: BDT 5,000 per month</p>
					</li>
					<li>
						<h3>Employability Test</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore itaque, harum fugiat neque corporis sint dolore cupiditate rerum nesciunt sed laboriosam, temporibus ut. Obcaecati voluptas iure, aspernatur officia quisquam aperiam.</p>
						<p>Pricing: BDT 2000</p>
					</li>
			</article>
			<aside id="sidebar">
				<div class="dark">
					<h3>Send A Message</h3>
					<form class="quote">
						<div>
							<label>Name</label></br>
							<input type="text" name="Name">
						</div>
						<div>
							<label>Email</label></br>
							<input type="email" name="Email Address">
						</div>
						<div>
							<label>Message</label></br>
							<textarea name="Message"></textarea>
							<button class="button_1" type="submit">Send</button>
						</div>
					</form>
				</div>
			</aside>
		</div>

	</section>
	<footer>
		<p>Chakri Khujo, Copyright &copy; 2018</p>
	</footer>
</body>
</html>