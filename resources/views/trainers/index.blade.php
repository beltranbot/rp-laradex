@extends('layouts.app')

@section('content')
    <div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                    <img class="card-img-top" src="{{Storage::url($trainer->avatar)}}" alt="">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach
    </div> <!--  end div.row -->    
@endsection