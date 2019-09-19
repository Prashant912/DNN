{!! Form::model($data,['method' => 'POST','route' => ['editpostFeaturedvideoform'], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data']) !!}
@csrf
{!! Form::hidden('id', $data->id) !!}
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
	<h4 class="modal-title" id="myModalLabel">Default Modal</h4>
</div>
<div class="modal-body">	
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
		<label class="col-sm-2 control-label"></label>
		<div class="col-sm-8">
		<img src="{{asset($data->background_image_path)}}" class="img-responsive" height="100px" width="100px">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Back Ground Image</label>
		<div class="col-sm-8">

			{!! Form::file('image', null, array('placeholder' => 'Back Ground Image','class' => 'form-control' ,'id'=>'name2')) !!}
			<p>Image size should be min 250* max 500px</p>
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Save changes</button>
</div>
{!! Form::close() !!}


