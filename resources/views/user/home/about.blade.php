@extends('user.layout.main')
@section('title','About')
@section('content')
<!--BREADCRUMB AREA START -->
<div class="breadcrumb_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">	
				<div class="breadcrumb-row">
					<h3 class="breadcrumb"><a href="/" class="home">Home</a><span>/</span>About</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!--BREADCRUMB AREA END -->
@foreach($abouts as $key => $about)
<div class="card-body row col-md-12">
	<div class="col-md-12">
		<ul class="list-group list-group-flush"> 
			<li class="list-group-item"><span class="h4 ">Title:</span> {{$about->title}}</li>
			<li class="list-group-item"><span class="h4 ">Name:</span> {{$about->name}}</li>
			<li class="list-group-item"><span class="h4 ">Phone:</span> {{$about->phone}}</li>
			<li class="list-group-item"><span class="h4 ">Email:</span> {{$about->email}}</li>
			<li class="list-group-item"><span class="h4 ">Address:</span> {{$about->address}}</li> 
			<li class="list-group-item"><span class="h4 ">Content:</span> {!! $about->content !!}</li> 
		</ul>
	</div>   
</div> 
<input type="hidden" value="{{$about->title}}" id="titlevalue">
<input type="hidden" value="{{$about->name}}" id="namevalue">
<input type="hidden" value="{{$about->address}}" id="addressvalue">
<input type="hidden" value="{{$about->email}}" id="emailvalue">
<input type="hidden" value="{{$about->phone}}" id="phonevalue">
<input type="hidden" value="{{asset('images/'.$about->logo)}}" id="logovalue">
@endforeach
<script src="{{asset('client/js/setabout.js')}}"></script>	
@endsection