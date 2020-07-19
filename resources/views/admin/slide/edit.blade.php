@extends('admin.layout.main')
@section('title','Edit Slide')
@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/admin/home">Admin</a></li>
		<li class="breadcrumb-item" ><a href="{{route('slide.index')}}" title="Danh mục">Slide</a></li>
		<li class="breadcrumb-item active">Create</li>
	</ol>
</div>
<div class="card">
	<div class="card-body">	
		{{Form::open(['route'=>['slide.update',$slide->id],'method'=>'put'])}}
		<div class="row ">
			<div class="form-group {{ $errors->has('link') ?'has-error':'' }}">
				{{ Form::label('link','Link : ') }}
				{{ Form::text('link',$slide->link,['class'=>'form-control'])}}
				<span class="text-danger">{{ $errors->first('link')}}</span>
			</div>
			<div class="form-group {{ $errors->has('url_img') ?'has-error':'' }}">
				{{ Form::label('Url img:','',['class'=>'']) }}
				{{ Form::file('image',['class' => 'form-control', 'id' => 'filename']) }}
				{{ Form::hidden('url_img', $slide->url_img, ['class' => 'form-control','id' => 'image_file' ]) }}
				<p id="path">{{ $slide->url_img }}</p>
				<span class="text-danger">{{ $errors->first('url_img')}}</span>		
			</div> 
			<div class="form-group">
				{{ Form::label('Isdisplay:','',['class'=>'']) }}
				{{ Form::select('isdisplay', array('1' => 'Display', '0' => 'Hidden'),$slide->isdisplay,['class' => 'form-control'])}} 
			</div>
		</div>
		<div class="form-group">
			{{ Form::submit('Update',['class'=>'btn btn-success']) }}
			<a class="btn btn-danger" href="{{route('slide.index')}}">Back</a>
		</div>
		{{ Form::close() }}
	</div>
</div>
<script type="text/javascript">
	$('#filename').on('change',function(e){               
		value = $(this).val();
		$.ajax({
			type: 'get',
			url: '{{ URL::to('setvalue') }}',
			data: {
				value: value
			},
			success:function(data){
				document.getElementById("image_file").value = data;
				$("#path").html(data);
			}
		});
	});
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection