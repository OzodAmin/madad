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
				<label>Название({{ $properties['native'] }}):</label>
				{!! Form::text($locale.'[name]', isset($partner) ? $partner->translate($locale)->name : null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				<label>Должность({{ $properties['native'] }}):</label>
				{!! Form::text($locale.'[position]', isset($partner) ? $partner->translate($locale)->position : null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				<label>Краткое описание({{ $properties['native'] }}):</label>
				{{ Form::textarea($locale.'[short_des]', isset($partner) ? $partner->translate($locale)->short_des : null, ['class' => 'form-control'])}}
			</div>
			{{-- <div class="form-group">
				<label>URL({{ $properties['native'] }}):</label>
				{{ Form::textarea($locale.'[description]', isset($partner) ? $partner->translate($locale)->description : null, ['class' => 'form-control'])}}
			</div> --}}
		</div>
		<?php $key++; endforeach; ?>

		<div class="tab-pane fade show" id="tab_image" role="tabpanel">
		<?php if( isset($partner) && $partner->featured_image ): ?>
		<div class="file-wrap">
			{{ Html::image('uploads/partner/'.$partner->featured_image, false, array('class' => 'img-responsive img-thumbnail')) }}
		</div>

		<?php endif; ?>
			<div class="form-group">
				<label for="image">Image:</label>
				{!! Form::file('featured_image', ['id' => 'image']) !!}
			</div>

		</div>
	</div>
	<div class="form-group">
		<label>URL:</label>
		<input type="text" class="form-control" name="url" value="<?= isset($partner) ? $partner->url : '';?>" required>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>