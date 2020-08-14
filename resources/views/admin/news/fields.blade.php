<div class="nav-tabs-custom col-xs-12">
	<div class="list-group list-group-horizontal" role="tablist">
		<?php $key = 1; foreach( LaravelLocalization::getSupportedLocales() as $locale => $properties ): ?>
		<a class="list-group-item list-group-item-action {{ $key==1 ? 'active' : '' }}" data-toggle="list" href="#tab_{{ $key }}" role="tab"> <i class="fas fa-fw fa-globe"></i>&nbsp;{{ $properties['native'] }}</a>&nbsp;
		<?php $key++; endforeach; ?>
		<a class="list-group-item list-group-item-action" data-toggle="list" href="#tab_image" role="tab"> <i class="fas fa-fw fa-image"></i>&nbsp;Main image</a>
	</div>

	<div class="tab-content mt-2">
		<?php $key = 1; foreach( LaravelLocalization::getSupportedLocales() as $locale => $properties ): ?>
		<div class="tab-pane fade show {{ $key==1 ? 'active' : '' }}" id="tab_{{ $key }}" role="tabpanel">
			<div class="form-group">
				<label for="name">Заголовок новость({{ $properties['native'] }}):</label>
				{!! Form::text($locale.'[title]', isset($news) ? $news->translate($locale)->title : null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				<label for="name">Краткое описание({{ $properties['native'] }}):</label>
				{!! Form::text($locale.'[short_des]', isset($news) ? $news->translate($locale)->short_des : null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{{ Form::textarea($locale.'[content]', isset($news) ? $news->translate($locale)->content : null, ['class' => 'form-control', 'id'=>'editor'.$key])}}
			</div>
		</div>
		<?php $key++; endforeach; ?>

		<div class="tab-pane fade show" id="tab_image" role="tabpanel">
		<?php if( isset($news) && $news->featured_image ): ?>
		<div class="file-wrap">
			{{ Html::image('uploads/'.$news->featured_image, false, array('class' => 'img-responsive img-thumbnail')) }}
		</div>

		<?php endif; ?>
			<div class="form-group">
				<label for="image">Image:</label>
				{!! Form::file('featured_image', ['id' => 'image']) !!}
			</div>

		</div>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Категория:</label>
		{!! Form::select('category_id',$categoriesArray,null,['class' => 'form-control']) !!}
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>