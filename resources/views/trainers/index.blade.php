@extends('layouts.app')

@section('content')
    <div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
            <div class="card" style="width: 18rem; margin-top: 70px">
                <div class="card-body text-center">
                    <img
                        style="height: 100px; width: 100px; background-color: #EFEFEF; mx-auto; display-block; margin: 20px"
                        class="card-img-top rounded-circle"
                        src="{{Storage::url($trainer->avatar)}}" alt="">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content.
                    </p>
                    <a href="{{'/trainers/' . $trainer->id}}" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    @endforeach
    </div> <!--  end div.row -->    
@endsection