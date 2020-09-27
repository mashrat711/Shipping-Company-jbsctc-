@extends('demos.Frontend.master')
@section('content')

	<!-- Page Title
		============================================= -->
	<section id="page-title" class="">

		<div class="container clearfix">
			<h1>Empty Container Shipment</h1>

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Service</li>
			</ol>
		</div>

	</section><!-- #page-title end -->

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<h3 class="center ls1 bottommargin"> When the containers  are emptied at Chittagong port of the desired shipping agents, we quickly transfer them to the specific empty yard for stacking. we trying to load empties on nominated feeder vessel from the date of un-stuffing container within "0" day if particular feeder vessel available at Berth for loading empties.:</h3>

				<div id="portfolio" class="portfolio portfolio-2 grid-container clearfix">

					<article class="portfolio-item pf-media pf-icons">
						<div class="portfolio-image">
							<img src="{{asset('assets/images/services/4th.jpg')}}" alt="The Atmosphere">
							<div class="portfolio-overlay">
								<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="#">Empty Container Stacking At CPA</a></h3>

						</div>
					</article>

					<article class="portfolio-item pf-illustrations">
						<div class="portfolio-image">
							<img src="{{asset('assets/images/services/s1.jpg')}}" alt="Wavelength Structure">
							<div class="portfolio-overlay">
								<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3>Empty Container Shipment At CPA</h3>

						</div>
					</article>





				</div>

			</div>



		</div>

	</section>


@endsection