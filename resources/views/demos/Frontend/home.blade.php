@extends('demos.Frontend.master')
@section('content')

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="nobg">

			<div class="container clearfix">
				<h1>About Us</h1>
				<span>A Short Page Title Tagline</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">
						<div class="col-lg-6">
							<div class="heading-block nobottomborder bottommargin-sm">
								<h3>Our Profile</h3>
								<span>JBS Container Tracing Company was established in 2014 to introduce a complete
								solution and save cost in all aspect.
								Usually after un-stuffing Import Cargo from the Container in Terminal,
								the Chottagram Port Authority is keeping empty containers in scattered way..</span>
							</div>
							<p>
								As a result, difficult to trace empty container for loading on feeder Vessel and remove to Off docks in the Terminal.
								JBS is stacking empty containers in separate places in the Terminal MLO wise after un-stuffing import cargo which will help to ship on Vessel and moves to Off Docks for ex-cargo stuffing conveniently.
								JBS is coordinating with Berth Operator to ship empties from the Terminal/Off Docks as per shipment advised by Carriers.
								JBS is trying to load empties on nominated feeder vessel from the date of un-stuffing container within "0" day ifparticular feeder vessel available at Berth for loading empties.
								JBS is also coordinating between Off Docks & Berth Operators to ensure that empty/Export laden containers are loading on nominated fdr vessels from the Off docks.
								Our service is available around the year, Seven days in a week and Twenty-four hours in a day.
								We pride ourselves on providing the best quality services at competitive rates, using only highly-trained technicians and skilled personnel.
								Our Container Tracking system is updating to the Shipping Line current position of containers in the Terminal. The application calculates storage time in ports and instantly notifies the user about any delay and shall take initiatives as per Carrier’s instruction.
								To fulfill Shipping agent’s requirement, we have deployed 25 staffs for Tracking, Loading empty containers on particular feeder Vessels and shifting to the Off Docks as per Client’s advice round the clock. 30 staffs appointed for cleaning empty containers and 10 staffs engage for official Job.</p>

						</div>

						<div class="col-lg-6">
							<div class="fslider flex-thumb-grid grid-6" data-pagi="false" data-arrows="false" data-thumbs="true">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/our3.jpg')}}">
											<img src="{{asset('assets/images/gallery/our3.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Empty Container Moves To Off-Dock Prime Mover From CPA</div>
										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/our2.jpg')}}">
											<img src="{{asset('assets/images/gallery/our2.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Empty Container Shipping At CPA</div>
										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/c2.jpg')}}">
											<img src="{{asset('assets/images/gallery/c2.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Empty Container Cleaning Job</div>
										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/5th.jpg')}}">
											<img src="{{asset('assets/images/gallery/5th.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Empty Reefer Container Stacking At CPA</div>
										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/55.jpg')}}">
											<img src="{{asset('assets/images/gallery/55.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Empty Container Moves To Off-Dock Prime Mover</div>
										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/our1.jpg')}}">
											<img src="{{asset('assets/images/gallery/our1.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Empty Container Depot Stacking At CPA</div>
										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/99.jpg')}}">
											<img src="{{asset('assets/images/gallery/99.jpg')}}" alt="Image">

										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/33.jpg')}}">
											<img src="{{asset('assets/images/gallery/33.jpg')}}" alt="Image">

										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/22.jpg')}}">
											<img src="{{asset('assets/images/gallery/22.jpg')}}" alt="Image">

										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/87.jpg')}}">
											<img src="{{asset('assets/images/gallery/87.jpg')}}" alt="Image">

										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/66.jpg')}}">
											<img src="{{asset('assets/images/gallery/66.jpg')}}" alt="Image">

										</div>
										<div class="slide" data-thumb="{{asset('assets/images/gallery/thumbs/77.jpg')}}">
											<img src="{{asset('assets/images/gallery/77.jpg')}}" alt="Image">
											<div class="flex-caption slider-caption-bg slider-caption-bg-light">Our Stuffs Monitoring At CPA</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="clear"></div>


				</div>

			</div>

		</section><!-- #content end -->

		@endsection