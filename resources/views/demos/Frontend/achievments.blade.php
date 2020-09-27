@extends('demos.Frontend.master')
@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="">

			<div class="container clearfix">
				<h1>Achievements</h1>
				<span>A Short Page Title Tagline</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Achievements</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<h2 class="center ls1 bottommargin">Some of Our Achievements:</h2>

					<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/1achiv.jpg')}}" alt="The Atmosphere">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="#">TRIDENT SHIPPING LINE LTD. as agents of Goldstar Line Ltd & Seth Shipping Line Ltd.</a></h3>

							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/2achive.jpg')}}" alt="Wavelength Structure">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>INTERPORT SHIP AGENTS LTD. as agents of Vasi Shipping PTE Ltd.</h3>

							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/3achiv.jpg')}}" alt="Greenhouse Garden">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>OCEAN NETWORK - EXPRESS BD LTD.</h3>

							</div>
						</article>



					</div>

				</div>



			</div>

		</section><!-- #content end -->
@endsection