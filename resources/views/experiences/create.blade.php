@extends('layouts.app')

@section('content')

<div class="container">
<form method="post" action="{{ route('experiences.store') }}" enctype="multipart/form-data">
        
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old ('title')}}">
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Compañía</label>
            <input type="text" name="company" class="form-control" id="company" value="{{ old('company')}}">
          </div>
          <div class="mb-3">
            <label for="from" class="form-label">Desde</label>
            <input type="date" name="from" class="form-control" id="from" value="{{ old('from') }}">
          </div>
          <div class="mb-3">
            <label for="to" class="form-label">Hasta</label>
            <input type="date" name="to" class="form-control" id="to" value="{{ old ('to') }}">
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
           
            <select name="tipo" id="tipo" class="form-control">
                <option value="Formativa" >Experiencia formativa</option>
                <option value="Profesional" >Experiencia profesional</option>    
            </select>
          </div>
          <div class="mb-3">
            <label for="pageurl" class="form-label">Url aplicación</label>
            <input type="text" name="pageurl" class="form-control" id="pageurl" value="{{ old('pageurl')}}">
          </div>
          <div class="mb-3">
            <label for="giturl" class="form-label">Url código</label>
            <input type="text" name="giturl" class="form-control" id="giturl" value="{{ old('giturl')}}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea id="description" name="description" class="form-control">{{ old('description')}}</textarea>
          </div>
          <div class="mb-3">
          @foreach ($tools as $tool)
              <input type="checkbox" name="tools[]" id="tools_{{  $tool->id }}" value="{{  $tool->id }}"> 
              @if ($tool->url == '')
              <span class="badge bg-{{ $tool->color }}">{{ $tool->name }}</span>
              @else
              <img src="{{ $tool->url }}" style="height: 1.5em" alt="{{ $tool->name }}" tooltip="{{ $tool->name }}">
              @endif  
          @endforeach
        </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
@endsection    