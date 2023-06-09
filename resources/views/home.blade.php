@extends('layouts.app')
@yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        @foreach($usuariosArray as $usuario)
        <div class="col-md-6">
            <ul class="list-group mt-4 mb-4">
                <li class="list-group-item active">{{$usuario['name']}}</li>
                <li class="list-group-item">{{$usuario['username']}}</li>
                <li class="list-group-item">{{$usuario['email']}}</li>
                <li class="list-group-item">{{$usuario['phone']}}</li>
                <li class="list-group-item">{{$usuario['website']}}</li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
