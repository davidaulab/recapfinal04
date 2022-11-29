@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row d-flex justify-content-between">

        <div class="card mt-4 justify-content-center text-center w-100">
            <div class="card-body">
                <h5 class="card-title">{{ $experience->title}}</h5>
                <p class="card-text">{{ $experience->company }} - desde {{ $experience->from }}
                    @isset($experience->to)
                    hasta {{ $experience->to}}
                    @endisset
                </p>
                <p class="card-text">
                    @foreach ($experience->tools as $tool)
                      @if ($tool->url == '')
                      <span class="badge bg-{{ $tool->color }}">{{ $tool->name }}</span>
                      @else
                      <img src="{{ $tool->url }}" style="height: 1.5em" alt="{{ $tool->name }}"
                          tooltip="{{ $tool->name }}">
                      @endif
                    @endforeach
                </p>

                <p class="card-text">{{ $experience->description }}</p>
                <div class="m-3">
                    @isset($experience->giturl)
                    <a href="{{ $experience->giturl}}" target="_blank"><img src="{{ asset ('/img/git.png')}}"
                            style="height: 2em"></a>
                    @endisset
                    @isset($experience->pageurl)
                    <a href="{{ $experience->pageurl}}" target="_blank"><img src="{{ asset ('/img/chrome.png')}}"
                            style="height: 2em"></a>
                    @endisset
                </div>



            </div>
        </div>


    </div>

    @auth
    <div class=" d-flex justify-content-between">

        <div>
            <a href="{{ route ('experiences.edit', $experience)}}" class="btn btn-primary">Editar</a>
        </div>
        <div>
            <form method="post" action="{{ route ('experiences.destroy', $experience)}}">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-primary">Borrar</button>
            </form>
        </div>
    </div>
    @endauth


</div>
@endsection
