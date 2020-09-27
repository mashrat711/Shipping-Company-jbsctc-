@extends('demos.Frontend.master')
@section('content')

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="">

			<div class="container clearfix">
				<h1>Clients</h1>

				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Clients</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<h2 class="center ls1 bottommargin">Some of Our Esteemed Clients:</h2>

					<div id="portfolio" class="portfolio portfolio-2 grid-container clearfix">

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/11.jpg')}}" alt="The Atmosphere">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="#"> Gold Star Line </a></h3>
								<span>We have been working with Gold Star Line with utmost honesty and dedication  from 2014 till now.</span>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/12.jpg')}}" alt="Wavelength Structure">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>APL Bangladesh Ltd. as a agent of CMA CGM </h3>
								<span> We have been working with CMA  CGM & APL Bangladesh Ltd. with utmost honesty and dedication  from 2017 till now.</span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/13.jpg')}}" alt="Greenhouse Garden">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Vasi Shipping PTE Ltd</h3>
								<span>.We have been working with Vasi Shipping PTE Ltd with utmost h
									onesty and dedication  from 2016 till now.</span>
							</div>
						</article>

						<article class="portfolio-item pf-icons pf-illustrations">
							<div class="portfolio-image">
								<img src="{{asset('assets/images/services/14.jpg')}}" alt="Industrial Hub">
								<div class="portfolio-overlay">
									<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Ocean Network – Express BD Ltd</h3>
								<span>We have been working with Ocean Network-Express BD Ltd with utmost
									honesty and dedication  from 2018 till now.</span>
							</div>
						</article>



					</div>

				</div>



			</div>

		</section>


		@endsection