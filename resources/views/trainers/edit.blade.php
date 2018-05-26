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
        @include('trainers.form')
        {!!Form::submit('Actualizar', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection