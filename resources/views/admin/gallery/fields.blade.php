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
				<label for="name">Заголовок ({{ $properties['native'] }}):</label>
				{!! Form::text($locale.'[title]', isset($gallery) ? $gallery->translate($locale)->title : null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<?php $key++; endforeach; ?>

		<div class="tab-pane fade show" id="tab_image" role="tabpanel">
		<?php if( isset($gallery) && $gallery->featured_image ): ?>
		<div class="file-wrap">
			{{ Html::image('uploads/gallery/'.$gallery->featured_image, false, array('class' => 'img-responsive img-thumbnail')) }}
		</div>

		<?php endif; ?>
			<div class="form-group">
				<label for="image">Изображение:</label>
				{!! Form::file('featured_image', ['id' => 'image']) !!}
			</div>

		</div>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Дата галереи:</label>
		<input type="text" name="event_date" class="form-control datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd" value="<?=isset($gallery) ? $gallery->event_date:'';?>">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Отправить</button>
</div>