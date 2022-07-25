@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="https://a.espncdn.com/photo/2021/0801/r889534_1296x729_16-9.jpg"  width="700" height="341">
                </div>
                <h5>Desarrollado:Cristian Piguave<h5>
            </div>
        </div>
    </div>
</div>

@endsection
