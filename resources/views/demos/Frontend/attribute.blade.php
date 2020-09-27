@extends('demos.Frontend.master')
@section('content')
	<div class="content-wrap">

		<div class="container clearfix">
			<div class="row clearfix">

				<div class="col-lg-7">


					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="2" data-items-xl="3">

						<div class="oc-item">
							<div class="team">
								<div class="team-image">
									<img src="{{asset('assets/images/team/11.jpg')}}" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><a href="#"><h4><span>Empty Container Shipment At CPA</span></h4></a></div>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="team">
								<div class="team-image">
									<img src="{{asset('assets/images/team/12.jpg')}}" alt="Josh Thompson">
								</div>
								<div class="team-desc">
									<div class="team-title"><a href="#"><h4><span>Empty Container Stacking At CPA</span></h4></a></div>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="team">
								<div class="team-image">
									<img src="{{asset('assets/images/team/13.jpg')}}" alt="Mary Jane">
								</div>
								<div class="team-desc">
									<div class="team-title"><a href="#"><h4><span> Empty Container Moves To Off-Dock Prime Mover From CPA</span></h4></a></div>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="team">
								<div class="team-image">
									<img src="{{asset('assets/images/team/11.jpg')}}" alt="Mary Jane">
								</div>
								<div class="team-desc">
									<div class="team-title"><a href="#"><h4><span>Empty Container Shipment At CPA</span></h4></a></div>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="team">
								<div class="team-image">
									<img src="{{asset('assets/images/team/12.jpg')}}" alt="Mary Jane">
								</div>
								<div class="team-desc">
									<div class="team-title"><a href="#"><h4><span>Empty Container Stacking At CPA</span></h4></a></div>
								</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-5">
					<h4>Mission</h4>

					<p>Our target is to provide  the best quality services at competitive rates, using only highly-trained technicians  and skilled personnel.</p>

					<ul class="iconlist iconlist-large iconlist-color">
						<li><i class="icon-ok"></i>Empty Container Stacking in the individual places inside Terminal </li>
						<li><i class="icon-ok"></i>  Empty Container Shipment as per instruction of Shipping Agent.</li>
						<li><i class="icon-ok"></i>Empty Container Move to particularOff Docks from the Terminal as per advise of Clients</li>

					</ul>
				</div>
			</div>
		</div>
		<div class="section nobottommargin">
			<h2 class="center nobottommargin ls1">Attributes:</h2>
			<br>
			<h3>We, together with the board of Directors, Advisers, Consultants, Management, staff members
				are responsible to implement atributes and are totally committed unyielding integrity to
				address the requirements of our clients and their expectations.</h3>
		</div>



		<div class="container clearfix">

			<div class="col_one_third nobottommargin">
				<div class="feature-box media-box">
					<div class="fbox-media">
						<img style="border-radius: 2px;" src="{{asset('assets/images/services/point1.jpg')}}" alt="Why choose Us?">
					</div>
					<div class="fbox-desc">
						<h2>Transparency & Honesty</h2>
						{{--<p>1) All our staffs are wearing safety equipment during job--}}

						{{--to enforce safety compliance.</p>--}}
					</div>
				</div>
			</div>


			<div class="col_one_third nobottommargin">
				<div class="feature-box media-box">
					<div class="fbox-media">
						<img style="border-radius: 2px;" src="{{asset('assets/images/services/point2.jpg')}}" alt="Effective Planning">
					</div>
					<div class="fbox-desc">
						<h2>Confidentiality</h2>
					</div>
				</div>
			</div>

			<div class="col_one_third nobottommargin col_last">
				<div class="feature-box media-box">
					<div class="fbox-media">
						<img style="border-radius: 2px;" src="{{asset('assets/images/services/point3.png')}}" alt="Why choose Us?">
					</div>
					<div class="fbox-desc">
						<h2>Anti-bribery</h2>
						{{--<p>Quos, non, esse eligendi ab accusantium volu--}}
						{{--ptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>--}}
					</div>
				</div>
			</div>

		</div>

		{{--<div class="section parallax dark" style="background-image: url('{{asset('assets/images/slider/1.jpg')}}');--}}
		{{--padding: 120px 0;"  data-bottom-top="background-position:0px 300px;" --}}
		{{--data-top-bottom="background-position:0px -300px;">--}}

		{{--<div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">--}}
		{{--<div class="flexslider">--}}
		{{--<div class="slider-wrap">--}}
		{{--<div class="slide">--}}
		{{--<div class="testi-image">--}}
		{{--<a href="#"><img src="{{asset('assets/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>--}}
		{{--</div>--}}
		{{--<div class="testi-content">--}}
		{{--<p>Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?</p>--}}
		{{--<div class="testi-meta">--}}
		{{--Steve Jobs--}}
		{{--<span>Apple Inc.</span>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--<div class="slide">--}}
		{{--<div class="testi-image">--}}
		{{--<a href="#"><img src="{{asset('assets/images/testimonials/2.jpg')}}" alt="Customer Testimonails"></a>--}}
		{{--</div>--}}
		{{--<div class="testi-content">--}}
		{{--<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>--}}
		{{--<div class="testi-meta">--}}
		{{--Collis Ta'eed--}}
		{{--<span>Envato Inc.</span>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--<div class="slide">--}}
		{{--<div class="testi-image">--}}
		{{--<a href="#"><img src="{{asset('assets/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>--}}
		{{--</div>--}}
		{{--<div class="testi-content">--}}
		{{--<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>--}}
		{{--<div class="testi-meta">--}}
		{{--John Doe--}}
		{{--<span>XYZ Inc.</span>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--</div>--}}
		{{--</div>--}}

		<div class="video-wrap" style="z-index: 1;">
			<div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
		</div>

	</div>
@endsection