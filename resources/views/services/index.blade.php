@extends('main')

@section('title', '| Services')

@section('content')


	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Our Services</h1>
		</div>
		<br>
	</div>
	@foreach ($services as $service)
	<ul>
		<li>
		<h4> {{ $service->title }}</h4>
		<img src = "{{ asset('images/'.$service->img) }}" height="100px" width="100px">
			<ul>

					@foreach($descriptions as $description)
					@if($service->id == $description->service_id)
					<li>{{ $description->body }}</li>
					@endif
					@endforeach

			</ul>
		</li>
	</ul>
	@endforeach
	<br>
	<style type="text/css">
		.row{
			background-color: #eee;
		}
	</style>

	 <div class="body">
      <h1>Company Services</h1>
    </div>
  </div>


<br>
<div class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="../../../photo/2.jpg" alt="Paris">
      <p><strong>Paris</strong></p>
      <p>Fri. 27 November 2015</p>
      <button class="btn">Buy Tickets</button>
      <li class="{{ Request::is('/complain') ? "active" : "" }}">
      <a href="/complain">Give your complain</a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="../../../photo/2.jpg" alt="New York">
      <p><strong>New York</strong></p>
      <p>Sat. 28 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="../../../photo/2.jpg" alt="San Francisco">
      <p><strong>San Francisco</strong></p>
      <p>Sun. 29 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
</div>
</li>
</div>
</div>
</div>
<div class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="../../../photo/2.jpg" alt="Paris">
      <p><strong>Paris</strong></p>
      <p>Fri. 27 November 2015</p>
      <button class="btn">Buy Tickets</button>
      <li class="{{ Request::is('/complain') ? "active" : "" }}">
      <a href="/complain">Give your complain</a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="../../../photo/1.jpg" alt="New York">
      <p><strong>New York</strong></p>
      <p>Sat. 28 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="../../../photo/3.jpg" alt="San Francisco">
      <p><strong>San Francisco</strong></p>
      <p>Sun. 29 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
</div>
</li>
</div>
</div>
</div>
<br>


	@endsection

</body>
