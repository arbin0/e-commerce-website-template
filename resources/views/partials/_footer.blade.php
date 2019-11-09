
<!-- 
<div class="footer">
  <hr>
      <p class="text-center">@2019Copyright Progress Thapa - All Rights Reserved</p>
        @if (Auth::check())
        @else
       <a href="{{ route('login') }}" >ERP Login</a>
       @endif
</div> -->


<style>
.sub-footer {
  position:inherit;
   
   width:100%;
   

    /* Height of the footer */

}
</style>

<!-- 
  <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>About Us</h4>
        <p>Day is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
            <li><i class="fa fa-phone fa"></i> +38 000 129900</li>
            <li><i class="fa fa-envelope fa"></i> info@domain.net</li>
          </ul>
        </div>
      </div>

   
  </footer> -->

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
           <p class="text-center">@2019Copyright Progress Thapa - All Rights Reserved</p>
        @if (Auth::check())
        @else
       <a href="{{ route('login') }}" >ERP Login</a>
       @endif
          
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
            -->
           <!--  <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

   {{ Html::style('js/jquery.js') }}
   {{ Html::style('js/bootstrap.min.js') }}
   {{ Html::style('js/wow.min.js') }}


  <script>

    wow = new WOW({}).init();
  </script>


