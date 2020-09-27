@extends('demos.Frontend.master')
@section('content')
	<div class="content-wrap">



		<div class="section nobottommargin">
			<h2 class="center nobottommargin ls1">Quality Policy:</h2>


		</div>

		<div class="container clearfix">

			<div class="col_one_third nobottommargin">
				<div class="feature-box media-box">
					<div class="fbox-media">
						<img style="border-radius: 2px;" src="{{asset('assets/images/services/point1.jpg')}}" alt="Why choose Us?">
					</div>
					<div class="fbox-desc">
						<h3> Safety Maintain <br><span class=""> All our staffs are wearing safety equipment during job

to enforce safety compliance.</span></h3>
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
						<h3>Clients Satisfaction <br><span class=""> We have a vast experience and serving these job in port area and inland container depots for prime shipping lines in Bangladesh since long with client’s full satisfaction.</span></h3>
						{{--<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore--}}
							{{--totam. Accusamus perspiciatis asperiores labore esse.</p>--}}
					</div>
				</div>
			</div>

			<div class="col_one_third nobottommargin col_last">
				<div class="feature-box media-box">
					<div class="fbox-media">
						<img style="border-radius: 2px;" src="{{asset('assets/images/services/point3.png')}}" alt="Why choose Us?">
					</div>
					<div class="fbox-desc">
						<h3>Planning <br><span class="">By formulating proper plan & procedures then we carry out the work smoothly.</span></h3>
						{{--<p>Quos, non, esse eligendi ab accusantium volu--}}
							{{--ptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>--}}
					</div>
				</div>
			</div>

		</div>


		<div class="video-wrap" style="z-index: 1;">
			<div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
		</div>

	</div>
	@endsection