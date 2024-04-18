@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar item id = {{$id}}</h1>
        </div>

        <form method="POST" action="{{route('actualizar.item')}}">
            @csrf
            <input type="hidden" name="idItem" value="{{$id}}">
            <div class="form-group">
                <label>Nombre item</label>
                <input type="text" name="item">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection
