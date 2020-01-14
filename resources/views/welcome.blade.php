@extends ('layout')

@section('content')

<div class="row relative sm-margin-bot">
	<picture class="centerTrick fullWidth">
		<source media="(max-width: 480px)" srcset="grfx/ipadBG_480.jpg" />
		<source media="(max-width: 992px)" srcset="grfx/ipadBG_992.jpg" />
		<source media="(max-width: 1200px)" srcset="grfx/ipadBG_1200.jpg" />
		<source media="(min-width: 1201px)" srcset="grfx/ipadBGFull.jpg" />
		<img class="fullWidth centerTrick" id="ipadBG" src="grfx/ipadBGFull.jpg" alt="Apex Innovations" />
	</picture>
</div>

<!-- <div class="row relative sliderContainer text-center" height="auto">	
		<div class="col-lg-4 col-xs-4">
    </div>
  </div> -->

<div class="container-fluid med-margin-top med-margin-bot mdPadBot">
	<div class="starBackground">
		<img src="/grfx/star-02.svg"/>
	</div>
	<div class="row justify-content-sm-center redBottom">
		<h3 class="redBot smPadBot">
			Welcome to Apex Innovations
		</h3>
	</div>

	<div class="row justify-content-sm-center">
		<p>Where education is exciting and competence is key!</p>
	</div>

	<div class="row justify-content-sm-center">
		<p>For healthcare professionals in organizations and academia.</p>
	</div>

	<div class="row justify-content-sm-center">
		<p>We empower the healthcare team to deliver the best care possible.</p>
	</div>

	<div class="row justify-content-sm-center">
		<img width="25%" height="25%" src="grfx/jointAccreditation.png" alt="Joint Accreditation" />
	</div>
</div>

<!-- Page Content -->
<div id="productCarouselContainer" class="container">
	<div class="row">

		<div class='col-sm-12'>
			<div class="carousel slide" data-ride="carousel" id="product-carousel">

				<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner text-center">
					@foreach ($products as $product)
					
					<div @if ($loop->first) class="carousel-item active" @else class="carousel-item" @endif>
						<div class="row grayBackground">

							<div class="col-sm-4">
								<img alt="Product Box" data-550="transform:translateX(-400px);opacity:0;"
									data-600="transform:translateX(0px);opacity:1;" class="genericGraphic"
									src="{{ $product->boxArtFaceLeft }}" />
							</div>
							<div class="col-sm-8">
								<div class="row">
									<div class="col-md-12 med-margin-top">
										<h2 class="redBot">Online Education and Tools</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4>{{$product->name}}</h4>						
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 sm-margin-top">
										{!! $product->featuresSpecial !!}
									</div>
								</div>
							</div>

						</div>
					</div>
					@endforeach

				</div>

				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
					@foreach ($products as $product)
						<li data-target="#product-carousel" data-slide-to="{{$loop->index}}" @if ($loop->first) class="active" @endif></li>
					@endforeach
				</ol>

			</div>

		</div>
	</div>




	<!-- Partners -->
	<div class="container-fluid">
		<div class="row d-flex flex-wrap align-items-center">

			<div class="col-lg-4 col-md-4 col-xs-4 thumb">

				<img class="img-responsive" src="grfx/BSWH_logo.jpg" style="width:100%" alt="Baylor Scott and White" />

			</div>

			<div class="col-lg-4 col-md-4 col-xs-4 thumb">

				<img class="img-responsive" src="grfx/LifePoint_logo.jpg" style="width:100%" alt="LifePoint Health" />

			</div>

			<div class="col-lg-4 col-md-4 col-xs-4 thumb">

				<img class="img-responsive" src="grfx/NorthShore_logo.jpg" style="width:100%" alt="NorthShore" />

			</div>

		</div>
	</div>

	<!-- Quantum -->
	<div class="container-fluid">
		<div class="row grey">
			<div class="col-sm-12 bottomBorder">
				<h2>Validate Competency</h2>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<p>Measure student performance and validate competency with Quantum, the first and only
						instructor-mediated,
						performance assessment tool.</p>
				</div>

				<div class="col-sm-6">
					<img alt="Product Box" data-550="transform:translateX(-400px);opacity:0;"
						data-600="transform:translateX(0px);opacity:1;" class="genericGraphic"
						src="grfx/Quantum_ProductBox_L.png" />
				</div>
			</div>
		</div>
		<!-- Customer Testimonials -->
		<div id="carouselContainer" class="container">
			<div class="row">

				<div class='col-sm-12'>
					<div class="carousel slide" data-ride="carousel" id="quote-carousel">

						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner text-center">

							<!-- Quote 1 -->
							<div class="carousel-item active">
								<div class="testimonialPanel">
									<p>"So we have been a PSC since 2012. We have never given t-PA in less than 71
										minutes, until last
										week! We had a 59 minute time. I think all of the additional education is
										really paying off!
										Thanks for the help"</p>
									<small class="testimonialText">Beth Wiese - RN Stroke Program
										Coordinator</small>
								</div>
							</div>

							<!-- Quote 2 -->
							<div class="carousel-item">
								<div class="testimonialPanel">
									<p>"I think it's a great way to have an interactive view of anatomy... then they
										understand neuro."
									</p>
									<small class="testimonialText">Debbie Summers - RN, MSN, ACNS-BC</small>
								</div>
							</div>

							<!-- Quote 3 -->
							<div class="carousel-item">
								<div class="testimonialPanel">
									<p>"It's so easy to use! It's very clear how to manuever around. Just a click
										and you can find out
										information with what's happening in the anatomy."</p>
									<small class="testimonialText">Rachel Malloy - CNRN</small>
								</div>
							</div>

							<!-- Quote 4 -->
							<div class="carousel-item">
								<div class="testimonialPanel">
									<p>"Each program actually addresses various learning styles for the participant.
										So it uses audio,
										visual, and even tactile learning styles so that each individual person can
										gain the maximum
										benefit out of using the program."</p>
									<small class="testimonialText">Christie Artuso - Ed D, RN, CNRN</small>
								</div>
							</div>

						</div>

						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#quote-carousel" data-slide-to="1"></li>
							<li data-target="#quote-carousel" data-slide-to="2"></li>
							<li data-target="#quote-carousel" data-slide-to="3"></li>
						</ol>

					</div>

				</div>
			</div>

			<?php
    //this turns the snow off after 3 days into the new year. If after 3 days (jan 3rd of the next year), the year is the same it will know that time is up into the new year.
    //tis the season.
    $month = date('m');
    $xmas = $month == 12;
    if ($month == 1 && date("Y", strtotime("-3 day")) !== date("Y")) {
      $xmas = true;
    }
    if ($xmas) {
      ?>
			<script>
				try{
        Blizzard('skrollr-body');
      } catch(e)
      {
        //probably not the home page. Ignore. 
      }
			</script>
			<style>
				.translucentWhiteBackground,
				.falling-snow {
					z-index: 999;
				}

				.falling-snow {
					pointer-events: none
				}
			</style>
			<?php
    }
  ?>
			@endsection