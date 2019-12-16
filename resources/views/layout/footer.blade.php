<div class="container translucentWhiteBackground">
  <div class="text-center em2 med-margin-top med-margin-bot">

    <div class="row">Copyright 2002 - <?php echo date(" Y" ); ?> Apex Innovations, LLC, All Rights Reserved</div>
      <div class="row">
        <div class="sm-margin-top">
          <a href="contactUs.html">Contact Us</a> | <a href="PrivacyPolicy.html">Privacy Policy</a> | <a
            href="TermsAndConditions.html">Terms &amp; Conditions</a> | <a href="EULA.html">EULA</a>
        </div>
      </div>

      <?php
        if(gethostname() =="devbox2.apex.local" && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == false)
        {
          echo '<script src="//devbox2.apexinnovations.com:35729/livereload.js"></script>';
        }
      ?>
    </div>
  </div>

  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5138614.js"></script>


  <!--[if lt IE 9]>
        <script>
               $('img[src*="svg"]').attr('src', function() {
                    return $(this).attr('src').replace('.svg', '.png');
                });
        </script>
    <![endif]-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42676756-1"></script>
  <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-42676756-1');
  </script>
</div> 