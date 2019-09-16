@extends('Admin.layouts.master')
@section('content')

<div class="panel panel-piluku">
			<div class="panel-heading">
				<h3 class="panel-title">
					Input Groups
					<span class="panel-options">
						<a href="#" class="panel-refresh">
							<i class="icon ti-reload"></i>
						</a>
						<a href="#" class="panel-minimize">
							<i class="icon ti-angle-up"></i>
						</a>
						<a href="#" class="panel-close">
							<i class="icon ti-close"></i>
						</a>
					</span>
					<div class="pull-right">
						<a class="btn btn-primary" href="{{route('featuredVideosForm')}}">Add News Category</a>
					</div>

				</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="Featuredlist" class="table table-bordered table-hover table-striped display" id="example">
						<thead>
							<tr>
								<th>Searial_Number</th>
								<th>Video_title</th>
								<th>Video_link </th>
								<th>background_image_name</th>
								<th>background_image_path</th>
								<th>status</th>
								<th>Action</th>
							</tr>
						</thead>	
					</table>
				</div>
			</div>
</div>
@endsection
@push('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
{!! Html::script('js/custom.js') !!}
