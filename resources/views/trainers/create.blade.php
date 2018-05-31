@extends('layouts.app')

@section('title', 'create trainer')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!!Form::open([
        'route' => 'trainers.store',
        'method' => 'post',
        'files' => true
    ])!!}
        @include('trainers.form')
        {!!Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection