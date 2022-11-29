@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row d-flex justify-content-between">
    @foreach ($toys as $toy)

    <div class="card mt-4 justify-content-center text-center" style="width: 18rem;">
        <img src="{{ $toy->img }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $toy->title}}</h5>
          <p class="card-text">{{ $toy->description }}</p>
            @isset($toy->age)
            <p class="card-text">Edad mínima recomendada: {{ $toy->age }}</p>
            @endisset
         
          <a href="{{ route ('toyshow', $toy)}}" class="btn btn-primary">Ver más</a>
        </div>
      </div>
        
    @endforeach
    </div>

    @auth
    <div class=" d-flex justify-content-center mt-4">
      <a href="{{ route ('toycreate')}}" class="btn btn-primary">Nuevo artículo</a>
</div>      
    @endauth


</div>
@endsection