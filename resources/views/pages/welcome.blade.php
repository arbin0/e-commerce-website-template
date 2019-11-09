@extends('main')

@section('title', '| Homepage')

@section('content')





<!-- <div class="container"> -->
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg" >
         <img class="img-fluid" src="../../../photo/ee.jpg" alt="Chania" height="250px">
       </div>
      <br>
      <h2><p>Some text about me in culpa qui officia deserunt mollit anim..</p></h2>


      <br>
      <br>

      <div class="p-5 ">

      <h2>Click US</h2>
      <p>Lorem ipsum dolor sit ame.</p>
    </div>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">

        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Categories</a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
     </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">
        <img class="img-fluid" src="../../../photo/p.jpg" alt="Chania">
            <!-- <img src="../../../photo/p.jpg" height="200px" width="500px" />
 -->
      </div>
      <br>
      <br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">
         <img class="img-fluid" src="../../../photo/r.jpg" alt="Chania">

      </div>
      <br>
      <br>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<br>
<div class="jumbotron jumbotron-fluid jumbotron-fluid-center">
  <div class="container">
  <h2 style="color:black">NEPAL ELECTRONIC TECHNICIAN RESEARCH CENTER PVT.LTD</h2>
     <p style="color: black">We specialize in blablabla</p>
  </div>
</div>

<br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../../../photo/ss.jpg" alt="New York" height="500px">
      <div class="carousel-caption">
        <h3>Nepal Electronic </h3>
        <p>The atmosphere in New York is lorem ipsum.</p>
      </div>
    </div>

    <div class="item">
      <img src="../../../photo/ee.jpg" height="500px" alt="Chicago">
      <div class="carousel-caption">
        <h3>Nepal Electronic training center</h3>
        <p>Thank you, Chicago - A night we won't forget.</p>
      </div>
    </div>

    <div class="item">
      <img src="../../../photo/vv.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Nepal Electronic Center</h3>
        <p>Even though the traffic was a mess, we had the best time.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
    <br>


<!--     <br>
<div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div> -->
            <br>






        <style>
.jumbotron {
  background-color: #f4511e; /* Orange */
  color: #ffffff;
}
.carousel-inner img {
  -webkit-filter: grayscale(90%);
  filter: grayscale(90%); /* make all photos black and white */
  width: 100%; /* Set width to 100% */
  margin: auto;
}

.carousel-caption h3 {
  color: #fff !important;
}

@media (max-width: 600px) {
  .carousel-caption {
    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
  }
}


  body {
    position: relative;
  }
  .affix {
    top: 20px;
    z-index: 9999 !important;
  }
  div.col-sm-9 div {
    height: 150px;
    font-size: 28px;
  }
  #section1 {color: #fff; background-color: #1E88E5;}
  #section2 {color: #fff; background-color: #673ab7;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}

  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
      margin-left: 150px;
    }
  }



</style>


@stop
