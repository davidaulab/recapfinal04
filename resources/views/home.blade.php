@extends('layouts.home')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CV de David Martinez') }}</div>

                <div class="card-body d-flex justify-content-center">
                    <img src="{{ asset ('/img/foto.png') }}" class="w-50 ">
                </div>
                <div class="card-body d-flex justify-content-center">
                    Breve resumen del perfil profesional
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card-header  mt-4">{{ __('Experiencias profesionales') }}</div>

            @foreach ($professionals as $experience)
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
                        @if($experience->giturl != '')
                        <a href="{{ $experience->giturl}}" target="_blank"><img src="{{ asset ('/img/git.png')}}"
                                style="height: 2em"></a>
                        @endif
                        @if($experience->pageurl != '')
                        <a href="{{ $experience->pageurl}}" target="_blank"><img src="{{ asset ('/img/chrome.png')}}"
                                style="height: 2em"></a>
                        @endif
                    </div>



                </div>
            </div>
            @endforeach
            

            <div class="card-header mt-4">{{ __('Formación') }}</div>

            @foreach ($courses as $experience)
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
            @endforeach



            



        </div>
    </div>
</div>
@endsection
