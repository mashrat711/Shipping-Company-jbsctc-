@extends('demos.Frontend.master')
@section('content')

	<!-- Page Title
		============================================= -->
	<section id="page-title" class="">

		<div class="container clearfix">
			<h1>Empty Container Moves to Off-Dock</h1>
			
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

				<h3 class="center ls1 bottommargin">  JBS is stacking empty containers in separate places in the Terminal MLO
					wise after un-stuffing import cargo which will moves to Off Docks for ex-cargo stuffing conveniently.</h3>

				<div id="portfolio" class="portfolio portfolio-2 grid-container clearfix">

					<article class="portfolio-item pf-media pf-icons">
						<div class="portfolio-image">
							<img src="{{asset('assets/images/icons/11.jpg')}}" alt="The Atmosphere">
							<div class="portfolio-overlay">
								<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="#">Empty Container Moves To Off-Dock Prime Mover From CPA</a></h3>

						</div>
					</article>

					<article class="portfolio-item pf-illustrations">
						<div class="portfolio-image">
							<img src="{{asset('assets/images/icons/12.jpg')}}" alt="Wavelength Structure">
							<div class="portfolio-overlay">
								<a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3>Empty Container Moves To Off-Dock Prime Mover From CPA</h3>
						</div>
					</article>





				</div>

			</div>



		</div>

	</section>


@endsection