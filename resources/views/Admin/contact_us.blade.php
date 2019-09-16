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
						

				</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="users" class="table table-bordered table-hover table-striped display">
						<thead>
							<tr>
								<th> S.N.</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email </th>
								<th>Contact Number</th>
								<th>Message</th>
								
							</tr>
						</thead>	
					</table>
				</div>
			</div>
</div>
@endsection

@push('script')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	$('#users').DataTable({
			
	        "processing": true,
	        "serverSide": true,
	        "ajax": "{{ route('contact-list-tablelist') }}",
	        "columns": [
	        	{data: 'serial_no', name: 'serial_no'},
	            {data: 'fname', name: 'fname'},
	            {data: 'lname', name: 'lname'},
	            {data: 'email', name: 'email'},
	            {data: 'phone', name: 'phone'},
	            {data: 'message', name: 'message'},
	            
	        
	        ]
	    });

			
			// $('#target').val(phoneNumber);

		
			});
</script>

