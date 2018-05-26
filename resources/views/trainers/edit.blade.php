@extends('layouts.app')

@section('title', 'edit trainer')

@section('content')
    {!!Form::model(
        $trainer,
        [
            'route' => ['trainers.update', $trainer],
            'method' => 'put',
            'files' => true
        ]
    )!!}
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
        {!!Form::submit('Actualizar', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection