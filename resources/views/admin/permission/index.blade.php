@extends('admin.layouts.app')

@section('title')
	Permission
@endsection

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Permission</h1>
		@can('permission-create')
			<a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('permission.create') }}"><i class="fas fa-plus fa-sm text-white-50"></i> New permission</a>
		@endcan
	</div>

	@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
	  <strong>{{$message}}</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	@endif

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Название</th>
					<th>Permission</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($permissions as $obj)
                    <tr>
                        <td>{{ $obj->title }}</td>
                        <td>{{ $obj->name }}</td>
                        <td>
                        	@can('permission-edit')
                            	<a href="{{route('permission.edit',['permission'=>$obj->id])}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;&nbsp;&nbsp;
                            @endcan
                            @can('permission-delete')
                            	<button type="button" name="edit" id="{{$obj->id}}" class="delete btn btn-danger btn-sm">Delete</button>
                            @endcan
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
	</div>
	{{ $permissions->links() }}

	<div id="confirmModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title">Confirmation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
	            </div>
	            <div class="modal-body">
	                <h4 align="center">Are you sure you want to remove this data?</h4>
	            </div>
	            <div class="modal-footer">
	            	<button type="button" name="ok_button" id="ok_button" class="btn btn-danger">Yes</button>
	                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$(document).on('click', '.delete', function(){
				user_id = $(this).attr('id');
				$('#ok_button').text('Yes');
				$('#confirmModal').modal('show');
			});

			$('#ok_button').click(function(){
				$.ajax({
					url:"permission/destroy/"+user_id,
					beforeSend:function(){
						$('#ok_button').text('Deleting...');
					},
					success:function(data)
					{
						setTimeout(function(){
							$('#confirmModal').modal('hide');
							alert('Data Deleted');
							location.reload();
						}, 1000);
					}
				})
			});
		});
	</script>
@endsection