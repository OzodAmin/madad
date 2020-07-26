@extends('admin.layouts.app')

@section('title')
	Users
@endsection

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Users</h1>
		<a href="{{ route('user.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> New user</a>
	</div>
	<div class="table-responsive">
		<table class="table" id="datatable">
			<thead>
				<tr>
					<th width="40%">User</th>
					<th width="40%">Role</th>
					<th width="20%">Action</th>
				</tr>
			</thead>
		</table>
	</div>

@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$('#datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax: {
					url: "{{ route('user.index') }}",
					type: 'GET',
				},
				columns: [
					{data: 'name', name: 'name' },
					{data: 'role', name: 'role' },
					{data: 'action', name: 'action', orderable: false},
				],
				order: [[0, 'ASC']]
			});
		});
	</script>
@endsection