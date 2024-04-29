@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
           <h1>Crear item</h1>
            <form method="POST" action="{{route('crear.item')}}">
                @csrf
                <div class="form-group">
                    <label>Nombre item</label>
                    <input type="text" name="item">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
