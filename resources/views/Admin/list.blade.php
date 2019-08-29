@extends('layouts.master')
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
						<a class="btn btn-primary" href="{{route('addImageForm')}}">Add More banner Images</a>
						</div>

				</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="customersLists" class="table table-bordered table-hover table-striped display" id="example">
						<thead>
							<tr>
								<th> S.N.</th>
								<th> ID</th>
								<th>Title</th>
								<th>Short Discription </th>
								<th>Image Name</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
								@foreach ($showdata as $key=> $cat)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$cat->id}}</td>
								<td>{{$cat->img_title}}</td>
								<td>{{$cat->img_description}} </td>
								<td>{{$cat->image_name}} </td>
								<td>{{$cat->image_date}} </td>
								<td> <a class="btn btn-primary" href="#">Edit</a>
                      				<a class="btn btn-warning" href="#">Active</a></td>
								
							</tr>
							@endforeach
							
					</table>
				</div>
			</div>
</div>
@endsection

