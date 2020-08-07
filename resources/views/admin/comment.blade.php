@extends('admin.layouts.app')

@section('title')
	Comment
@endsection

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Comment</h1>
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
					<th>News</th>
					<th>Date</th>
					<th>User name</th>
					<th>User contact</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($comments as $comment)
                    <tr>
                        <td><a href="<?=LaravelLocalization::getLocalizedURL('ru', 'news/'.$comment->news->slug)?>" target="_blank">{{ $comment->news->title }}</a></td>
                        <td>{{ $comment->created_at }}</td>
                        <td>{{ $comment->name }}</td>
                        <td>
                        	<p>{{ $comment->email }}</p>
                        	<p>{{ $comment->phone }}</p>
                        </td>
                        <td class="<?=$comment->status?'bg-success':'bg-danger'?>">{{ $comment->status }}</td>
                        <td>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#commentModal_{{$comment->id}}">View</button>
							<!-- Modal -->
							<div class="modal fade" id="commentModal_{{$comment->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="labelcommentModal_{{$comment->id}}" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="labelcommentModal_{{$comment->id}}"><?=$comment->name.' - '.$comment->created_at;?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">{{ $comment->content }}</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
											@if (!$comment->status)
											{!! Form::model($comment, ['method' => 'PATCH','route' => ['comment.update', $comment->id]]) !!}
												<input type="hidden" name="comment" value="<?=$comment->id;?>">
												<button type="submit" class="btn btn-primary">Одобрить</button>
											{!! Form::close() !!}
											@endif
										</div>
									</div>
								</div>
							</div>
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
	</div>
	{{ $comments->links() }}

@endsection

@section('script')
	<script>

	</script>
@endsection