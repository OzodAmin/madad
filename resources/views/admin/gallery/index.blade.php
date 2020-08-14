@extends('admin.layouts.app')

@section('title')
	Galleries
@endsection

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Галереи</h1>
		@can('gallery-create')
			<a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('gallery.create') }}"><i class="fas fa-plus fa-sm text-white-50"></i> Новая галерея</a>
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
					<th>Изображение</th>
					<th>Название</th>
					<th>Дата</th>
					<th>Действие</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($galleries as $gallery)
                    <tr>
                        <td><img src="{{ asset('uploads/gallery/'.$gallery->featured_image) }}" class="img-thumbnail" width="200px"></td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->event_date }}</td>
                        <td>
                        	@can('gallery-edit')
                            	<a href="{{route('gallery.edit',['gallery'=>$gallery->id])}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;&nbsp;
                            @endcan
                            @can('gallery-delete')
                            	<button type="button" name="edit" id="{{$gallery->id}}" class="delete btn btn-danger">Delete</button>&nbsp;&nbsp;&nbsp;
                            @endcan
                            <a href="{{route('gallery-images.index',['gallery'=>$gallery->id])}}" class="btn btn-warning">Изображений</a>
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
	</div>
	{{ $galleries->links() }}

	<div id="confirmModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title">Подтверждение</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
	            </div>
	            <div class="modal-body">
	                <h4 align="center">Вы уверены, что хотите удалить эти данные?</h4>
	            </div>
	            <div class="modal-footer">
	            	<button type="button" name="ok_button" id="ok_button" class="btn btn-danger">Да</button>
	                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
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
					url:"gallery/destroy/"+user_id,
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