
@extends('Admin.layouts.master')
@section('content')

<div class="main-content">
		<!--theme panel-->
		<div class="panel">
			<div class="panel-body">
				<!--form-heading-->
				<div class="form-heading">
					Featured form
				</div>
					<div class="alert alert-success" id="pks" role="alert" style="display :none;"></div>
					<div class="alert alert-danger" id="errors" role="alert" style="display: none;"></div>

					 {!! Form::open(['method' => 'POST','route' => ['postFeaturedvideoform'], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data', 'id'=>'data']) !!}
					@csrf
					<!--Default Horizontal Form-->
					<div class="form-group">
						<label class="col-sm-2 control-label">Video Title*:</label>
						<div class="col-sm-8">
							{!! Form::text('Video_title', null, array('placeholder' => 'Video Title','class' => 'form-control','id'=>'name')) !!}

						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Video Link*</label>
						<div class="col-sm-8">
							{!! Form::text('Video_link', null, array('placeholder' => 'Video Link','class' => 'form-control' ,'id'=>'name1')) !!}
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Back Ground Image</label>
						<div class="col-sm-8">

							{!! Form::file('image', null, array('placeholder' => 'Back Ground Image','class' => 'form-control' ,'id'=>'name2')) !!}
							<p>Image size should be min 250* max 500px</p>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
							<!-- <input type="submit" value="submit" class="btn btn-success"> -->
							<button type="button" class="btn btn-success" id="submit_btn">Submit</button>
							<input type="reset" class="btn btn-warning">
						</div>
					</div>

				  {!! Form::close() !!}
			</div>
		</div>
</div>
@endsection
@push('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
{!! Html::script('js/custom.js') !!}
