<fieldset class="border p-2">
    <legend  class="w-auto text-dark">ФИО консультанта</legend>
    <div class="form-group">
        <input type="text" name="name_ru" class="form-control" placeholder="Русский" value="<?= isset($consultant) ? $consultant->name_ru : '';?>">
    </div>
    <div class="form-group">
        <input type="text" name="name_uz" class="form-control" placeholder="O'zbekcha" value="<?= isset($consultant) ? $consultant->name_uz : '';?>">
    </div>
</fieldset>
<fieldset class="border p-2">
    <legend  class="w-auto text-dark">Должность консультанта</legend>
    <div class="form-group">
        <input type="text" name="position_ru" class="form-control" placeholder="Русский" value="<?= isset($consultant) ? $consultant->position_ru : '';?>">
    </div>
    <div class="form-group">
        <input type="text" name="position_uz" class="form-control" placeholder="O'zbekcha" value="<?= isset($consultant) ? $consultant->position_uz : '';?>">
    </div>
</fieldset>
<fieldset class="border p-2">
    <legend  class="w-auto text-dark">Описание консультанта</legend>
    <div class="form-group">
        <input type="text" name="description_ru" class="form-control" placeholder="Русский" value="<?= isset($consultant) ? $consultant->description_ru : '';?>">
    </div>
    <div class="form-group">
        <input type="text" name="description_uz" class="form-control" placeholder="O'zbekcha" value="<?= isset($consultant) ? $consultant->description_uz : '';?>">
    </div>
</fieldset>
<div class="form-group">
    <label>Контактный телефон:</label>
    <input type="text" class="form-control" name="phone" value="<?= isset($consultant) ? $consultant->phone : '';?>">
</div>
<div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control" name="email" value="<?= isset($consultant) ? $consultant->email : '';?>">
</div>
<?php if( isset($consultant) && $consultant->featured_image ): ?>
<div class="file-wrap">
    {{ Html::image('uploads/consultant/'.$consultant->featured_image, false, array('class' => 'img-responsive img-thumbnail')) }}
</div>
<?php endif; ?>
<div class="form-group">
    <label for="image">Изображение:</label>
    {!! Form::file('featured_image') !!}
</div>
<button type="submit" class="btn btn-primary btn-block">Submit</button>