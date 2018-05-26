<div class="form-group">
    {!!Form::label('name', 'Nombre') !!}
    {!!Form::text('name', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('slug', 'Slug') !!}
    {!!Form::text('slug', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('avtar', 'Avatar') !!}
    {!!Form::file('avatar')!!}
</div>
