@extends('layouts.app')

@section('title', 'create trainer')

@section('content')
    <form
        class="form-group"
        method="POST"
        action="/trainers"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input
                type="text"
                class="form-control"
                placeholder="Nombre"
                name="name">
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection