<header>
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>M</span>fff<img class="brand-image" src="/grfx/ApexLogo500.svg" alt="Apex Innovations, Education Healthcare Relies On"></a>
			</div>

			<div class="navbar-collapse collapse ">
				<ul class="nav navbar-nav">
					<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Education & Tools <b class=" icon-angle-down"></b></a>
						<ul class="dropdown-menu">
							<li><a href="typography.html">Typography</a></li>
							<li><a href="components.html">Components</a></li>
							<li><a href="pricingbox.html">Pricing box</a></li>
						</ul>
					</li>
					<li class="{{ Request::is('quantum') ? 'active' : '' }}"><a href="/quantum">Quantum Competncy</a></li>
					<li class="{{ Request::is('about')  ? 'active' : '' }}"><a href="/about">About</a></li>
					<li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
					<li class="{{ Request::is('login') ? 'active' : '' }}"><a href="/contact">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>