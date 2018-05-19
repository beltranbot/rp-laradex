@extends('layouts.app')

@section('title', 'create trainer')

@section('content')
<div class="container">
    <form class="form-group" method="POST" action="/trainers">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input
                type="text"
                class="form-control"
                placeholder="Nombre"
                name="name">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection