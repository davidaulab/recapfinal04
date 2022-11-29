@extends('layouts.app')

@section('content')

<div class="container">
<form method="post" action="{{ route('contactstore') }}" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email de contacto</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Mensaje</label>
            <textarea id="description" name="description" class="form-control"></textarea>
          </div>
                
    
          <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection    