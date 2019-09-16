
@extends('Admin.layouts.master')
@section('content')

<div class="main-content">
		<!--theme panel-->
		<div class="panel">
			<div class="panel-body">
				<!--form-heading-->
				<div class="form-heading">
					<h3>Location form</h3>
				</div>

					 {!! Form::Model($editdata,['method' => 'POST','route' => ['postlocationform'],'class'=>'form form-horizontal','enctype'=>'multipart/form-data','id'=>'location-add']) !!}


					@csrf

					 {!! Form::hidden('id', $editdata->id, array('class' => 'form-control')) !!}

					<div class="alert alert-success" id="pk" role="alert"></div>

						
					<div class="alert alert-danger" id="errors" role="alert" style="display: none;"></div>
			

					<div class="form-group">
						<label class="col-sm-2 control-label">Short Discription :</label>
						<div class="col-sm-8">
								{!! Form::textarea('description', null, array('placeholder' => 'About Location','class' => 'form-control','id'=>'description')) !!}	
						</div>
					</div>
					<!--Default Horizontal Form-->
					<div class="form-group">
						<label class="col-sm-2 control-label">Address:</label>
						<div class="col-sm-8">
							{!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact Number:</label>
						<div class="col-sm-8">
							{!! Form::text('contact_number', null, array('placeholder' => 'Contact Number','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="picker">
						<div class="form-group">
							<label class="col-sm-2 control-label">Fax</label>
							<div class="col-md-8">
								{!! Form::text('fax',null, array('placeholder' => 'date','class' => 'form-control')) !!}
							</div>
						</div>
					</div>

					<div class="picker">
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-md-8">
								{!! Form::email('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}	
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
@push('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
{!! Html::script('js/custom.js') !!}
