



   <img class="img" src="../../../photo/rr.jpg" alt="Chania" height="300px" width="100%">





<br>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
 <!--  <a class="navbar-brand" href="/">
    <h2>Nepal Electronic Service</h3></a> -->

<ul class="nav justify-content-right">
     <li class="{{ Request::is('/') ? "active" : "" }}">
      <a href="/" style="color: white;"><h3>Home</h3></a>
    </li>

    <li class="{{ Request::is('services') ? "active" : "" }}">
      <a href="/services"  style="color: white;"><h3>Services</h3></a>
    </li>

     <li class="{{ Request::is('about') ? "active" : "" }}">
      <a href="/complains" style="color: white;"><h3>Help & Support</h3></a>
    </li>

    <li class="{{ Request::is('about') ? "active" : "" }}">
     <a href="/notices" style="color: white;"><h3>Notices & Events</h3></a>
   </li>

      <li class="{{ Request::is('contact') ? "active" : "" }}">
        <a href="/contact" style="color: white;"><h3>Contact</h3></a>
      </li>
<!--
      <form class="navbar-form nav justify-content-end" action="/action_page.php">
  <div class="input-group">

    </div>
  </div>
</form> -->
 </ul>
<ul class="nav justify-content-end">

        @if (Auth::check())

        <li>
          <a href="{{ route('complain.index') }}" > {{ Auth::user()->name }}</a>

        </li>

        @else





        @endif


    </li>
  </ul>
</nav>






<!--
      </ul>
    </div>/.navbar-collapse
  </div><!-- /.container-fluid -->
<!-- </nav> -->
