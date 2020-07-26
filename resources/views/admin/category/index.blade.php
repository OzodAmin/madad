@extends('admin.layouts.app')

@section('title')
	Categories
@endsection

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Categories</h1>
		<a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('category.create') }}"><i class="fas fa-plus fa-sm text-white-50"></i> New category</a>
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
					<th width="60%">Category</th>
					<th width="40%">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->title }}</td>
                        <td>
                            <a href="{{route('category.edit',['category'=>$category->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" name="edit" id="{{$category->id}}" class="delete btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
	</div>
	{{ $categories->links() }}

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
					url:"category/destroy/"+user_id,
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