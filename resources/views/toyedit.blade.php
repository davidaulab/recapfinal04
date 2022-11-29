@extends('layouts.app')

@section('content')

<div class="container">
<form method="post" action="{{ route('toyupdate', $toy) }}" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Nombre del artículo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $toy->title}}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea id="description" name="description" class="form-control">{{ $toy->description}}</textarea>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Edad recomendada</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ $toy->age}}">
          </div>       
          <div class="mb-3">
            <label for="img" class="form-label">Imagen</label>
            <input type="file" name="img" class="form-control" id="img">
          </div> 
          <div class="mb-3">
            <label for="img" class="form-label">Imagen actual</label>
            <img src="{{ $toy->img }}" class="w-25">
          </div>    
          <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
@endsection    