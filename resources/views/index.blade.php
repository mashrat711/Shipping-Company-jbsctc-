@extends('demos.Frontend.master')
@section('content')
		<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 550px;" data-loop="true">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('{{asset('assets/images/slider/9th.jpg')}}'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2>Lets Introduce Our JBS Container Tracing Company</h2>

							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-right">
								<h2>Empty Container Shipment At CPA</h2>

							</div>
						</div>
						<div class="video-wrap">
							<video id="slide-video" poster="{{asset('assets/images/slider/9th.jpg')}}" preload="auto" loop autoplay muted>
								<source src='{{asset('assets/images/videos/2.mp4')}}' type='video/mp4' />
								<source src='{{asset('assets/images/videos/2.mp4')}}' type='video/mp4' />
							</video>
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('{{asset('assets//images/slider/2nd.jpg')}}'); background-position: center bottom;">
						<div class="container clearfix">
							<div  class="slider-caption">
								<h2>Night View Of Chittagong Port</h2>

							</div>
						</div>
					</div><div class="swiper-slide" style="background-image: url('{{asset('assets//images/slider/4th.jpg')}}'); background-position: center bottom;">
						<div class="container clearfix">
							<div  class="slider-caption">
								<h2>Empty Container Stacking At CPA.</h2>

							</div>
						</div>
					</div>
				</div>
				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="promo promo-light promo-full uppercase bottommargin-lg header-stick">
					<div class="container clearfix">
						<h3 style="letter-spacing: 2px;">Welcome To JBS Container Tracing Company</h3>


					</div>
				</div>



				</div>
			<div class="video-wrap" style="z-index: 1;">
				<div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
			</div>

				<div class="container clearfix">

					<div class="heading-block center">
						<h2>Management</h2>

					</div>

					<div class="row clearfix">

						<div class="col-lg-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="{{asset('assets/images/projects/bishnupada.jpg')}}" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>Bishnu Pada Sikder</h4><span>Chairman</span></div>
									<div class="team-content">
										<p>JBS was established in 2014 with the goal of providing its clients
											with the very best container tracing service and to be their trusted
											partner. It is this vision along with perseverance <span id="dots">...</span><span id="more">and a clear focus
											on service excellence that has enabled JBS to grow into a truly local
											brand in just over a decade of operations. In the mid-1988s I began
											my shipping operations as a vessel operator, stevedores at chittagong
											port. Over the last decade, we have scaled our service reach as an
											container tracking company with strong partners operating containers
											in Chittagong port & inland deport Our own offices and a multicultural
											team of more than 65 dedicated people, JBS continues to provide its
											clients around Bangladesh a premium service with trust and dependability</span></p>
										<button onclick="myFunction()" id="myBtn">Read more</button>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-light si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="{{asset('assets/images/projects/janapriya.jpg')}}" alt="Josh Clark">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>Jana Priya Barua</h4><span>Managing Director</span></div>
									<div class="team-content">
										<p>JBS Container Tracing Company has now become very popular in Bangladesh. I have been supervising the ship side at chittagong port since 1987. We later established this organization in 2014 with experience. We look forward to working with you in the future.</p>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-light si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="{{asset('assets/images/projects/mdjashim.jpg')}}" alt="Mary Jane">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>MD. Jashim Uddin</h4><span>Vice- Managing Director</span></div>
									<div class="team-content">
										<p>I have been supervising the container yard side of Chittagong port since
											1990. Later we jointly established JBS Tracing Company. We have come so
											far with hard work. We request everyone to stay by our side so that we can
											continue our activities in the future with honesty.</p>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-light si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-6 bottommargin">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="{{asset('assets/images/projects/mdaslam.jpg')}}" alt="Nix Maxwell">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>MD. Aslam</h4><span>Working Partner</span></div>
									<div class="team-content">
										<p>I have been supervising the container yard side of Chittagong port since 1993.
											We established this organization in 2014 with our  experience. We
											hope that we will give most better service by your support.</p>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-light si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-light si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>
						</div>

					</div>



				</div>




			<div class="section nobottommargin">
				<h2 class="center nobottommargin ls1">JBS Services</h2>

			</div>

			<div class="section nobottommargin">
				<div class="container clear-bottommargin clearfix">
					<h2 class="center nobottommargin ls1">JBS CONTAINER TRACING COMPANY is introducing a complete solution and save cost in all aspect</h2>

					<div class="row topmargin-sm clearfix">

						<div class="col-lg-3 bottommargin">
							<i class="i-plain color i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>
							{{--<div class="heading-block nobottomborder" style="margin-bottom: 15px;">--}}
								{{--<span class="before-heading">Scalable on Devices.</span>--}}
								{{--<h4>Responsive &amp; Retina</h4>--}}
							{{--</div>--}}
							<p> JBS is stacking empty containers in separate places in the Terminal MLO wise after un-stuff
								ing import cargo which will help on board Vessel and moves to Off Docks for ex-cargo stuffing conveniently..</p>
						</div>

						<div class="col-lg-3 bottommargin">
							<i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>

							<p>JBS is coordinating with Berth Operator to ship empties from the Terminal/Off
								Docks as per shipment advised by Carriers.</p>
						</div>

						<div class="col-lg-3 bottommargin">
							<i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>

							<p> JBS is trying to load empties on nominated fdr vessel from the date of un-stuffing container within
								“O” days when vessel is available and ready for loading empties.</p>
						</div><div class="col-lg-3 bottommargin">
							<i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>

							<p>JBS is also coordinating between Off Docks & Berth Operators to ensure that
								empty/Export laden containers are loading on nominated fdr vessels from the Off docks.</p>
						</div>

					</div>

				</div>
			</div>
			<div class="container clearfix">

				<div class="col_one_third nobottommargin">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img style="border-radius: 2px;" src="{{asset('assets/images/projects/1.jpg')}}" alt="Why choose Us?">
						</div>
						<div class="fbox-desc">
							<h3>Empty Container Stacking At CPA</h3>
							{{--<p>1) All our staffs are wearing safety equipment during job--}}

							{{--to enforce safety compliance.</p>--}}
						</div>
					</div>
				</div>

				<div class="col_one_third nobottommargin">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img style="border-radius: 2px;" src="{{asset('assets/images/projects/2.jpg')}}" alt="Effective Planning">
						</div>
						<div class="fbox-desc">
							<h3> Care For Work For Specific Clients</h3>
						</div>
					</div>
				</div>

				<div class="col_one_third nobottommargin col_last">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img style="border-radius: 2px;" src="{{asset('assets/images/projects/3.jpg')}}" alt="Why choose Us?">
						</div>
						<div class="fbox-desc">
							<h3> Empty Container Shipment At CPA</h3>
						</div>
					</div>
				</div>

			</div>






				<div class="container topmargin-lg cleafix">

					<div class="col_three_fourth">

						<div class="tabs tabs-justify nobottommargin clearfix" id="construction-tabs">

							<ul class="tab-nav clearfix">
								<li><a href="#construction-tab-1">Why Us?</a></li>
								<li><a href="#construction-tab-2">Work Ethic</a></li>
								<li><a href="#construction-tab-3">Team</a></li>
								<li><a href="#construction-tab-4">Locations</a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="construction-tab-1">
									<p>We proud ourselves on providing  the best quality services at competitive rates, using only highly-trained technicians  and skilled personnel.
										Our Container Tracking system is updating to the Shipping Line current position of containers in the Terminal. The application calculates storage time in ports and instantly notifies the user about any delay and shall take initiatives as per Carrier’s instruction.
									<div class="col_one_fourth nobottommargin center">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="964" data-refresh-interval="50" data-speed="2000"></span></div>
										<h5>Floors Built</h5>
									</div>

									<div class="col_one_fourth nobottommargin center">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="8514" data-refresh-interval="50" data-speed="2500"></span></div>
										<h5>Employees</h5>
									</div>

									<div class="col_one_fourth nobottommargin center">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="458" data-refresh-interval="50" data-speed="3500"></span></div>
										<h5>Happy Clients</h5>
									</div>

									<div class="col_one_fourth nobottommargin center col_last">
										<div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="14" data-to="159" data-refresh-interval="15" data-speed="2700"></span></div>
										<h5>Cities Served</h5>
									</div>
								</div>
								<div class="tab-content clearfix" id="construction-tab-2">
									<img src="{{asset('assets/images/projects/3.jpg')}}" width="260" alt="Image" class="img-thumbnail alignleft">
									<p>We, together with the board of Directors, Advisers, Consultants, Management, staff members are responsible to implement atributes and are totally committed unyielding integrity to address the requirements of our clients and their expectations..</p>
								</div>
								<div class="tab-content clearfix" id="construction-tab-3">
									<p>To fulfill Shipping agent’s requirement, we have deployed 25 staffs for Tracking, Loading empty containers on particular feeder Vessels and shifting to the Off Docks as per Client’s advice round the clock. 30 staffs appointed for cleaning empty containers and 10 staffs engage for official Job.</p>
									<div class="row clearfix">
										<div class="col-md-4">
											<ul class="iconlist nobottommargin">
												<li><i class="icon-ok"></i> 100% Assurance</li>
												<li><i class="icon-ok"></i> Hard Working</li>
												<li><i class="icon-ok"></i> Trustworthy</li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="iconlist nobottommargin">
												<li><i class="icon-ok"></i> Intelligent</li>
												<li><i class="icon-ok"></i> Always Curious</li>
												<li><i class="icon-ok"></i> Perfectionists</li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="iconlist nobottommargin">
												<li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
												<li><i class="icon-ok"></i> Accomodating Nature</li>
												<li><i class="icon-ok"></i> Available 24x7</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-content clearfix" id="construction-tab-4">

									<div class="clear-bottommargin-sm">
										<div class="row clearfix">
											<div class="col-md-7 bottommargin-sm">

												<div class="clear-bottommargin-sm">
													<div class="row clearfix">
														<div class="col-md-6 bottommargin-sm">
															<address>
																<strong>OFFICE:</strong><br>
																102 Amin Bhaban,1st Floor,Barik Building<br>
																Strand Road,Bandar,Chattagram-4100<br>
															</address>
														</div>
														<div class="col-md-6 bottommargin-sm">
															<abbr title="Phone Number"><strong>Phone:</strong></abbr>+031-718231<br>
															<abbr title="Phone Number"><strong>Phone:</strong></abbr>+8801707 - 773380<br>
															<abbr title="Fax"><strong>Phone:</strong></abbr>+01629 - 682422<br>
															<abbr title="Fax"><strong>Phone:</strong></abbr>+8801742 - 318492<br>
															<abbr title="Email Address"><strong>Email:</strong></abbr> jbscontainer123@gmail.com
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-5 bottommargin-sm">
												<img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180&key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA" alt="Google Map" class="img-thumbnail">
											</div>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="col_one_fourth col_last">

						<div class="widget quick-contact-widget form-widget clearfix">
							<h4>Quick Quotation Form</h4>
							<div class="form-result"></div>
							<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
								<div class="form-process"></div>
								<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
								<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
								<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<input type="hidden" name="prefix" value="quick-contact-form-">
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
							</form>

						</div>

					</div>



					</div>

			{{--<marquee behavior="" direction="">--}}
				{{--<div class="container clearfix">--}}

					{{--<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel--}}
					{{--carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000"--}}
					 {{--data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5"--}}
					 {{--data-items-xl="6" style="padding: 20px 0;">--}}

						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/55.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client3.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client4.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/56.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client3.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client4.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients"></a></div>--}}
						{{--<div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/55.jpg')}}" alt="Clients"></a></div>--}}

					{{--</div>--}}


				{{--</div>--}}
			{{--</marquee>--}}
			{{--<marquee behavior="" direction="">--}}

				{{--<div class="container clearfix">--}}
					{{--<div id="oc-clients" class="" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000"--}}
					 {{--data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5"--}}
					 {{--data-items-xl="6" style="padding: 20px 0;">--}}
					{{--<ul>--}}
				{{--<li><div class="oc-item"><img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients"></div></li>--}}
				{{--<li><img src="{{asset('assets/images/clients/55.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client3.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client4.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/56.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client3.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client4.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients"></a></div></li>--}}
				{{--<li><div class="oc-item"><a href="https://logofury.com/"><img src="{{asset('assets/images/clients/55.jpg')}}" alt="Clients"></a></div></li>--}}
					{{--</ul>	</div>--}}
			{{--</marquee>--}}
			<marquee behavior="" direction=""><div class="section nobottommargin">
				<div class="container clearfix">

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<img src="{{asset('assets/images/clients/client1.jpg')}}" alt="Clients">
						</div>
					</div>

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<img src="{{asset('assets/images/clients/client2.jpg')}}" alt="Clients">
						</div>
					</div>

					<div class="col_one_fourth nobottommargin">
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<img src="{{asset('assets/images/clients/client3.jpg')}}" alt="Clients">
						</div>
					</div>


					<div class="col_one_fourth nobottommargin col_last">
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<img src="{{asset('assets/images/clients/client4.jpg')}}" alt="Clients">
						</div>
					</div>

				</div>
			</div></marquee>
		</section><!-- #content end -->

		@endsection