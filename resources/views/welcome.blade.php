@extends ('layout')

@section('content')
		
	<div class="row relative">
    <picture class="centerTrick fullWidth">
      <source media="(max-width: 480px)" srcset="grfx/ipadBG_480.jpg"/>
      <source media="(max-width: 992px)" srcset="grfx/ipadBG_992.jpg"/>
      <source media="(max-width: 1200px)" srcset="grfx/ipadBG_1200.jpg"/>
      <source media="(min-width: 1201px)" srcset="grfx/ipadBGFull.jpg"/>
      <img class="fullWidth centerTrick" id="ipadBG" src="grfx/ipadBGFull.jpg" alt="Apex Innovations"/>
    </picture>
    <canvas id="pictureCanvas" height="459" width="1209" class="absolute fullHeight fullWidth absoluteTop absoluteLeft"></canvas>
	</div>
  
  <!-- <div class="row relative sliderContainer text-center" height="auto">	
		<div class="col-lg-4 col-xs-4">
    </div>
  </div> -->

  <div class="container-fluid">
      <div class="row justify-content-sm-center">  
        <h2>Welcome to Apex Innovations</h2>
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

      <div  class="row justify-content-sm-center">
        <img width="150px" src="grfx/jointAccreditation.png" alt="Joint Accreditation" />
      </div>
  </div>
    
  <!-- Page Content -->
    
  <div class="container-fluid">
	  <div class="row grey">
      <div class="col-sm-12">
        <h2>Online Education and Tools</h2>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <img alt="Product Box" data-550="transform:translateX(-400px);opacity:0;" data-600="transform:translateX(0px);opacity:1;" class="genericGraphic" src="grfx/Impulse3_ProductBox_R.png"/>
        </div>

        <div class="col-sm-6">
          <h4>imPulse 3.0</h4>
          <p>ECG and Chest Pain Competency SeriesNine individual guideline-based courses are designed to address the educational needs of monitor techs to physicians.</p>
        </div>
      </div>

        <!-- <div class="row text-left" style="display: flex; align-items: center; flex-wrap:wrap">
          <div class="col-lg-4 col-sm-12">
            
          </div>    
          <p class="lead col-lg-8 col-sm-12">In 2002, Apex Innovations was founded by Marianne Bourgeois, an emergency nurse who witnessed a false computer-generated 12-lead ECG interpretation for a patient who was really having an MI. She developed MI Rule Visions&reg;, a template to help others better understand 12-lead ECGs and subsequently, online continuing education.</p>
          
          <div class="row text-left" style="display: flex; align-items: center;flex-wrap:wrap">
            <div class="col-lg-4 col-sm-12">
              <img alt="Heart Rhythm" data-850="transform:translateX(-400px);opacity:0;" data-900="transform:translateX(0px);opacity:1;" class="genericGraphic" src="grfx/genericGraphic2.svg"/>
            </div>
            <p class="lead col-lg-8 col-sm-12">Located in the heart of Cajun country, Lafayette, Louisiana, Apex Innovations is housed amid lively festivals, spicy foods and people deeply rooted in their Southern charm and rich culture.  We are dedicated to educating the medical community and providing learning that is unique and fun to learn!</p>
          </div>
          
          <div class="row text-center smPadTop">
            <p class="lead">Apex Innovations provides the highest quality online continuing education to individuals, hospitals and health systems, universities, organizations, and corporations around the world. With a goal to empower our learners to deliver the best health care possible, Apex Innovations designs, manufactures, and provides education filled with amazing graphics, 3-D animations, and interactivity.</p>
          </div>   
        </div>
      </div>
    </div>
    
    <div class="row relative overflowXHidden">
      <img alt="Background Effect" width="1020" height="1002" class="blueLine3 absolute" src="grfx/blueLine3.svg"/>
    </div> -->
  </div>

  <!-- Partners -->
  <div class="container-fluid">
	  <div class="row">
      <div class="col-sm-4">
        <img width="150px" src="grfx/BSWH_logo.jpg" alt="Baylor Scott and White" />
      </div>

      <div class="col-sm-4">
        <img width="150px" src="grfx/LifePoint_logo.jpg" alt="LifePoint Health" />
      </div>

      <div class="col-sm-4">
        <img width="150px" src="grfx/NorthShore_logo.jpg" alt="NorthShore" />
      </div>
    </div>
  </div>

  <!-- Quantum -->
  <div class="container-fluid">
	  <div class="row grey">
      <div class="col-sm-12">
        <h2>Validate Competency</h2>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <p>Measure student performance and validate competency with Quantum, the first and only instructor-mediated, performance assessment tool.</p>
        </div>

        <div class="col-sm-6">
          <img alt="Product Box" data-550="transform:translateX(-400px);opacity:0;" data-600="transform:translateX(0px);opacity:1;" class="genericGraphic" src="grfx/Quantum_ProductBox_L.png"/>
        </div>
      </div>
  </div>
    
  <!-- Customer Testimonials -->
  <div id="carouselContainer" class="container">
    <div class="row">
		  
      <div class='col-sm-12'>
        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
          
          <!-- Bottom Carousel Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#quote-carousel" data-slide-to="1"></li>
            <li data-target="#quote-carousel" data-slide-to="2"></li>
            <li data-target="#quote-carousel" data-slide-to="3"></li>
          </ol>

          <!-- Carousel Slides / Quotes -->
          <div class="carousel-inner text-center">

            <!-- Quote 1 -->
            <div class="item active">
              <div class="testimonialPanel">
                <p>"So we have been a PSC since 2012. We have never given t-PA in less than 71 minutes, until last week!  We had a 59 minute time.  I think all of the additional education is really paying off!  Thanks for the help"</p>
                <small class="testimonialText">Beth Wiese - RN Stroke Program Coordinator</small>
              </div>
            </div>
            
            <!-- Quote 2 -->
            <div class="item">
              <div class="testimonialPanel">
                <p>"I think it's a great way to have an interactive view of anatomy... then they understand neuro."</p>
                <small class="testimonialText">Debbie Summers - RN, MSN, ACNS-BC</small>
              </div>
            </div>
            
            <!-- Quote 3 -->
            <div class="item">  
              <div class="testimonialPanel">
                <p>"It's so easy to use! It's very clear how to manuever around. Just a click and you can find out information with what's happening in the anatomy."</p>
                <small class="testimonialText">Rachel Malloy - CNRN</small>
              </div>
            </div>
            
            <!-- Quote 4 -->
            <div class="item">  
              <div class="testimonialPanel">
                <p>"Each program actually addresses various learning styles for the participant. So it uses audio, visual, and even tactile learning styles so that each individual person can gain the maximum benefit out of using the program."</p>
                <small class="testimonialText">Christie Artuso - Ed D, RN, CNRN</small>
              </div>
            </div>

        </div>
      </div>
		  
	  </div>
  </div>
   
  <!--<script>
    $('document').ready(function(){
      $('#myModal').modal();
    })
  </script>-->
     
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
          .translucentWhiteBackground,.falling-snow{
            z-index:999;
          }
          
          .falling-snow{
          pointer-events:none
          }
        </style>
      <?php
    }
  ?>
@endsection


@section('oldContent')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

@endsection