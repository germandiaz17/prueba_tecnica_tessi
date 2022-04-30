@extends('layouts.app')

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

                    {{ __('This is the Users...') }}
                </div>
            </div>
        </div>
        @foreach($usuariosArray as $usuario)
            <div class="col-md-6 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">{{$usuario['name']}}</li>
                    <li class="list-group-item">{{$usuario['email']}}</li>
                    <li class="list-group-item">{{$usuario['website']}}</li>
                </ul>
            </div>
        @endforeach
    </div>
</div>
@endsection
