@extends('demos.Frontend.master')
@section('content')
	<section id="page-title" class="">

		<div class="container clearfix">
			<h1>Services</h1>
			<span>A Short Page Title Tagline</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Service</li>
			</ol>
		</div>

	</section><!-- #page-title end -->
	<div class="section row nopadding align-items-stretch dark topmargin clearfix">
		<div class="col-lg-4 d-none d-md-block" style="background: url('{{asset('assets/images/services/parallax.jpg')}}') center center repeat; background-size: cover;">
			<div>&nbsp;</div>
		</div>
		<div class="col-lg-8">
			<div class="col-padding">

				<div class="row align-items-stretch clearfix">
					<div class="col-md-6 bottommargin">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><img src="{{asset('assets/images/icons/building.png')}}" alt="Concrete Developments"></a>
							</div>
							<h3>Concrete Developments</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
						</div>
					</div>
					<div class="col-md-6 bottommargin">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><img src="{{asset('assets/images/icons/bank.png')}}" alt="Finance Assistance"></a>
							</div>
							<h3>Finance Assistance</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
						</div>
					</div>
					<div class="col-md-6 bottommargin">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><img src="{{asset('assets/images/icons/traffic-cone.png')}}" alt="Smart Builders"></a>
							</div>
							<h3>Smart Builders</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
						</div>
					</div>
					<div class="col-md-6 bottommargin">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><img src="{{asset('assets/images/icons/paint-brush.png')}}" alt="Quality Infrastructure"></a>
							</div>
							<h3>Quality Infrastructure</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><img src="{{asset('assets/images/icons/drawer.png')}}" alt="Interiorly Designed"></a>
							</div>
							<h3>Interiorly Designed</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><img src="{{asset('assets/images/icons/paper-money.png')}}" alt="Cost Effective Solutions"></a>
							</div>
							<h3>Cost Effective Solutions</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="container clearfix">
		<div class="row clearfix">

			<div class="col-lg-7">
				<h4>Our Dedicated Team</h4>

				<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="2" data-items-xl="3">

					<div class="oc-item">
						<div class="team">
							<div class="team-image">
								<img src="{{asset('assets/images/team/1.jpg')}}" alt="John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><a href="#"><h4>John Doe</h4></a><span>Construction engineer</span></div>
							</div>
						</div>
					</div>

					<div class="oc-item">
						<div class="team">
							<div class="team-image">
								<img src="{{asset('assets/images/team/2.jpg')}}" alt="Josh Thompson">
							</div>
							<div class="team-desc">
								<div class="team-title"><a href="#"><h4>Josh Thompson</h4></a><span>Project leader</span></div>
							</div>
						</div>
					</div>

					<div class="oc-item">
						<div class="team">
							<div class="team-image">
								<img src="{{asset('assets/images/team/3.jpg')}}" alt="Mary Jane">
							</div>
							<div class="team-desc">
								<div class="team-title"><a href="#"><h4>Mary Jane</h4></a><span>Quality manager</span></div>
							</div>
						</div>
					</div>

					<div class="oc-item">
						<div class="team">
							<div class="team-image">
								<img src="{{asset('assets/images/team/5.jpg')}}" alt="Mary Jane">
							</div>
							<div class="team-desc">
								<div class="team-title"><a href="#"><h4>Alan Fresco</h4></a><span>Vehicle park manager</span></div>
							</div>
						</div>
					</div>

					<div class="oc-item">
						<div class="team">
							<div class="team-image">
								<img src="{{asset('assets/images/team/4.jpg')}}" alt="Mary Jane">
							</div>
							<div class="team-desc">
								<div class="team-title"><a href="#"><h4>Customer Support</h4></a><span>Quality manager</span></div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="col-lg-5">
				<h4>Clients Overview</h4>

				<p>We prize our Clients more than everything else. We strive to provide Quality Services to all our Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services. <a href="#">See more...</a></p>

				<ul class="clients-grid grid-3 nobottommargin clearfix">
					<li style="padding: 20px;"><a href="#"><img src="{{asset('assets/images/clients/1.jpg')}}" alt="Clients"></a></li>
					<li style="padding: 20px;"><a href="#"><img src="{{asset('assets/images/clients/1.jpg')}}" alt="Clients"></a></li>
					<li style="padding: 20px;"><a href="#"><img src="{{asset('assets/images/clients/1.jpg')}}" alt="Clients"></a></li>
					<li style="padding: 20px;"><a href="#"><img src="{{asset('assets/images/clients/1.jpg')}}" alt="Clients"></a></li>
					<li style="padding: 20px;"><a href="#"><img src="{{asset('assets/images/clients/1.jpg')}}" alt="Clients"></a></li>
					<li style="padding: 20px;"><a href="#"><img src="{{asset('assets/images/clients/1.jpg')}}" alt="Clients"></a></li>
				</ul>
			</div>
		</div>
	</div>

	<a href="service.blade.php" class="button button-3d nobottomborder topmargin-sm button-full center tright bottommargin t300 font-primary" style="font-size: 26px;">
		<div class="container clearfix">
			Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
		</div>
	</a>

	<div class="section nobg notopmargin nopadding footer-stick">
		<div class="container clearfix">

			<div class="row">
				<div class="col-lg-7">
					<img src="{{asset('assets/images/services/bottom-trust.jpg')}}" alt="Bottom Trust">
				</div>
				<div class="col-lg-5 topmargin-sm">
					<div class="heading-block nobottomborder">
						<h2>You're in Good Hands.</h2>
						<span class="ls1">Five Points that define Our Reliability.</span>
					</div>

					<ul class="iconlist iconlist-large iconlist-color">
						<li><i class="icon-ok"></i> Market Leader since 1915</li>
						<li><i class="icon-ok"></i> Positive Results within Deadlines</li>
						<li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
						<li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
						<li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	@endsection