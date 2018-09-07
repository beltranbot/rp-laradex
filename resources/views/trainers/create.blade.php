@extends('layouts.app')

@section('title', 'create trainer')

@section('content')
    {!!Form::open([
        'route' => 'trainers.store',
        'method' => 'post',
        'files' => true
    ])!!}
        @include('trainers.form')
        {!!Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection