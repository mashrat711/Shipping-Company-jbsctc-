@extends('demos.Frontend.master')
@section('content')

		{{--<section id="google-map" class="gmap"></section>--}}

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="postcontent nobottommargin">

						<h3>Send us an Email</h3>

						<div class="form-widget">

							<div class="form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="../../include/form.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<div class="col_two_third">
										<label for="template-contactform-subject">Services <small>*</small></label>
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
									</div>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>
						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar col_last nobottommargin">

						<div class="widget clearfix">

							<h3 class="nobottommargin uppercase">Bangladesh</h3><br>

							<address>
								<strong>OFFICE:</strong><br>
								102 Amin Bhaban,1st Floor,Barik Building<br>
								Strand Road,Bandar,Chattagram-4100<br>
							</address>




							<abbr title="Phone Number"><strong>Phone:</strong></abbr>+031-718231<br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr>+8801707 - 773380<br>
							<abbr title="Fax"><strong>Phone:</strong></abbr>+01629 - 682422<br>
							<abbr title="Fax"><strong>Phone:</strong></abbr>+8801742 - 318492<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> jbscontainer123@gmail.com

							<div class="line line-sm"></div>


						</div>

						<div class="line line-sm"></div>

						<div class="widget notopmargin clearfix">

							<a href="{{asset('https://www.facebook.com/jbsctc/')}}" class="social-icon si-small si-dark si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-dark si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-dark si-dribbble">
								<i class="icon-dribbble"></i>
								<i class="icon-dribbble"></i>
							</a>

							<a href="#" class="social-icon si-small si-dark si-forrst">
								<i class="icon-forrst"></i>
								<i class="icon-forrst"></i>
							</a>

							<a href="#" class="social-icon si-small si-dark si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-dark si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

						</div>

					</div><!-- .sidebar end -->

				</div>


			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		@endsection

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyA9P-19NT0q9dIrTj5rfWYjGin9KiC6gsY"></script>
	<script src="{{asset('assets//js/jquery.gmap.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('assets/js/functions.js')}}"></script>

	<script>

		$('#google-map').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 330px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin"><img src="../../../../public/assets/images/gallery/thumbs/1.jpg" class="alignleft" alt="" style="margin: 5px 10px 1px 0;" />Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/marker.png",
						iconsize: [32, 39],
						iconanchor: [13,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>

</body>
</html>