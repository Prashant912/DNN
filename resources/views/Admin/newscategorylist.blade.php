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
						<a class="btn btn-primary" href="{{route('NewsCategory')}}">Add News Category</a>
						</div>

				</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="users" class="table table-bordered table-hover table-striped display" id="example">
						<thead>
							<tr>
								
								<th> ID</th>
								<th>news_category</th>
								<th>img_title </th>
								<th>short_description</th>
								<th>long_description</th>
								<th>Img_name</th>
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
@section('extrajs')



<script type="text/javascript">
	$(document).ready(function(){
		oTable = $('#users').DataTable({

	        "processing": true,
	        "serverSide": true,
	        "ajax": "{{ route('latestnewscategorylists') }}",
	        "columns": [
	        	
	            {data: 'id', name: 'id'},
	            {data: 'news_id', name: 'news_id'},
	            {data: 'img_title', name: 'img_title'},
	            {data: 'short_description', name: 'short_description'},
	            {data: 'long_description', name: 'long_description'},
	            {data: 'img_name', name: 'img_name'},
	            {data: 'status', name: 'status'},
	            {data: 'action', name: 'action',className:'noPrint', orderable: false},
	        
	        ]
	    });

			
			// $('#target').val(phoneNumber);

		
			});
</script>


@endsection
