
@extends('Admin.layouts.master')
@section('content')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

@if ($errors->any())
			<div class="alert alert-danger">
				<ul>

					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

<div class="main-content">
		<!--theme panel-->
		<div class="panel">
			<div class="panel-body">
				<!--form-heading-->
				<div class="form-heading">
					horizontal form
				</div>
				<!--form-heading-->
				<!-- <form  action="{{route('addImageDetail')}}"  method="post" class="form form-horizontal" role="form" enctype="multipart/form-data"> -->

					 {!! Form::open(['method' => 'POST','route' => ['addImageDetail'], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data']) !!}


					@csrf
					<!--Default Horizontal Form-->
					<div class="form-group">
						<label class="col-sm-2 control-label">Image Title:</label>
						<div class="col-sm-8">
							{!! Form::text('img_title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}

<!-- {!! Form::select('name',[
	'abcd'=>'abcd',
	'xyz'=>'xyz',
],null,array('id'=>'name','class'=> $errors->has('name') ? 'form-control is-invalid state-invalid' : 'form-control', 'placeholder'=>'--select--', 'autocomplete'=>'off','required'=>'required')) !!} -->
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Short Discription :</label>
						<div class="col-sm-8">

								{!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Image Upload:</label>
						<div class="col-sm-8">

							{!! Form::file('image', null, array('placeholder' => 'date','class' => 'form-control')) !!}
							<p>Image size should be min 250* max 500px</p>
						</div>
					</div>

					<div class="picker">
						<div class="form-group">
							<label class="col-sm-2 control-label">Date Picker Popup</label>
							<div class="col-md-8">
								{!! Form::date('date', null, array('placeholder' => 'date','class' => 'form-control')) !!}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<!-- <input type="submit" value="submit" class="btn btn-success"> -->
							<button type="submit" class="btn btn-success">Submit</button>
							<input type="reset" class="btn btn-warning">
						</div>
					</div>

				  {!! Form::close() !!}
			</div>
		</div>
</div>
@endsection
