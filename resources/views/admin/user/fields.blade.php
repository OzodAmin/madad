@csrf

<div class="form-group">
    {!! Form::label('name', 'Ф.И.О:') !!}
    {{ Form::text('name', isset($user) ? $user->name : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {{ Form::text('email', isset($user) ? $user->email : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', $rolesArray, isset($roleId) ? $roleId[0] : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <a href="{!! route('user.index') !!}" class="btn btn-default">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
    
</div>
