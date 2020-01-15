
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
		<!-- header start -->
		<header>
			<div class="header-area header-sticky">
				<div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-6">
							<div class="logo align-content-center">
								<a href="index.html">NAMFA TRADE INTERNATIONAL</a>
							</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6">
							<div class="logo align-content-center">
								<a href="index.html">JUTE EXPO TRADING CORPORATION</a>
							</div>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-9 col-xs-12">
							<div class="main-menu text-right">
								<nav>
									<ul class="menu">
										<li><a href="{{ url('/') }}">HOME</a></li>
										<li><a href="{{ url('/page/about') }}">ABOUT US</a></li>
										<li><a href="{{ url('/page/products', []) }}">PRODUCTS & FACILITIES <i aria-hidden="true"></i></a>
											<ul>
												<li><a href="{{ url('/page/products', []) }}">Development</a></li>
												<li><a href="{{ url('/page/products', []) }}">Work</a></li>
											</ul>
										</li>
										<li><a href="{{ url('page/uses' ) }}">USES <i aria-hidden="true"></i></a>
										    <ul>
												<li><a href="blog.html">blog1</a></li>
												<li><a href="blog.html">blog2</a></li>
												<li><a href="blog.html">blog3</a></li>
												<li><a href="blog.html">blog4</a></li>
												<li><a href="blog.html">blog5</a></li>
											</ul>
										</li>
                                        <li ><a href="{{ url('/page/services') }}">services</a>
                                            <ul style="width: 500% !important">
												<li ><a href="{{ url('/page/services') }}">Why buyer's should approach NAMFA?</a></li>
											</ul>
                                        </li>
									</ul>
								</nav>
							</div>
							<div class="mobile-menu"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
		<marquee  direction="right" height="30px" style="background-color: red">
			This is a sample scrolling text that has scrolls texts to right.
		</marquee>
