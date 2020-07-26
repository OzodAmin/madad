<div class="nav-tabs-custom col-xs-12">
	<div class="list-group list-group-horizontal" role="tablist">
		<?php $key = 1; foreach( LaravelLocalization::getSupportedLocales() as $locale => $properties ): ?>
		<a class="list-group-item list-group-item-action {{ $key==1 ? 'active' : '' }}" data-toggle="list" href="#tab_{{ $key }}" role="tab"> <i class="fas fa-fw fa-globe"></i>&nbsp;{{ $properties['native'] }}</a>&nbsp;
		<?php $key++; endforeach; ?>
	</div>

	<div class="tab-content mt-2">
		<?php $key = 1; foreach( LaravelLocalization::getSupportedLocales() as $locale => $properties ): ?>
		<div class="tab-pane fade show {{ $key==1 ? 'active' : '' }}" id="tab_{{ $key }}" role="tabpanel">
			<div class="form-group">
				<label for="name">Заголовок({{ $properties['native'] }}):</label>
				{!! Form::text($locale.'[title]', isset($category) ? $category->translate($locale)->title : null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<?php $key++; endforeach; ?>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>