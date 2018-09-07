@extends('layouts.app')

@section('title', 'trainer')

@section('content')
    
    <div class="card-body text-center">
        <img
            style="height: 200px; width: 200px; background-color: #EFEFEF; mx-auto; display-block; margin: 20px"
            class="card-img-top rounded-circle"
            src="{{Storage::url($trainer->avatar)}}" alt="">    
        <h5>{{$trainer->name}}</h5>
        <h1>{{$trainer->slug}}</h1>
        <div class="text-center">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi tempore, consequatur amet reprehenderit tenetur repudiandae minus excepturi maxime officiis mollitia, quis delectus corrupti officia sed voluptatum eum fugiat dolores voluptates.</p>
        </div>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Edit</a>
        {!! Form::open([
            'route' => ['trainers.destroy', $trainer->slug],
            'method' => 'delete'
        ])!!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection