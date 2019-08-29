
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
				<!-- <form  action="{{ route('updatedata',array('id'=>$editdata->id)) }}"  method="post" class="form form-horizontal" role="form" enctype="multipart/form-data"> -->


				 {!! Form::model($editdata,['method' => 'POST','route' => ['updatedata', 'id'=>$editdata->id], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data']) !!}

					@csrf
					<!--Default Horizontal Form-->
					<div class="form-group">
						<label class="col-sm-2 control-label">Image Title:</label>
						<div class="col-sm-8">
						{!! Form::text('img_title', null, array('placeholder' => 'img_title', 'class' => 'form-control')) !!} 
						</div>
					</div>


					<!-- 	{{Form::text("img_title", 
							old("img_title") ? old("img_title") : (!empty($user) ? $user->img_title : null),
							[
								"class" => "form-control",
								"placeholder" => "img_title",
							])
						}} -->
					
					<!-- <div class="form-group">
						<label class="col-sm-2 control-label">Short Discription :</label>
						<div class="col-sm-8">
							<textarea name="description"  class="form-control text-area" cols="30" rows="10" placeholder="Short Discription ">{{ old('img_description') ? old('img_description') : $editdata->img_description}}</textarea>
						</div>
					</div> -->


					<div class="form-group">
						<label class="col-sm-2 control-label">description:</label>
						<div class="col-sm-8">
						{!! Form::textarea('img_description', null, array('placeholder' => 'img_description','class' => 'form-control')) !!} 
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-8">
						<img src="/images/{{ $editdata->image_name }}">
						<input type="hidden" name="image" value="/images/{{ $editdata->image_name }}">
						</div>
					</div>
					
					<!-- <div class="form-group">
						<label class="col-sm-2 control-label">Image Upload:</label>
						<div class="col-sm-8">
							<input type="file" name="image" class="filestyle" data-icon="false" placeholder="Image Upload ">
						</div>
					</div> -->

					<div class="form-group">
						<label class="col-sm-2 control-label">Image Upload:</label>
						<div class="col-sm-8">
							{!! Form::file('image', null, array('placeholder' => 'file','class' => 'form-control')) !!} 
						</div>
					</div> 




					<div class="picker">
						<div class="form-group">
							<label class="col-sm-2 control-label">Date Picker Popup</label>
							<div class="col-md-8">
								<!-- <input type="text" name="date" value="{{ old('image_date') ? old('image_date') : $editdata->image_date}}" class="form-control" id="date-popup" data-provide="datepicker"> -->

								{!! Form::date('image_date', null, array('placeholder' => 'date','class' => 'form-control')) !!} 
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

				<!-- </form> -->
			</div>
		</div>
</div>
@endsection
