@extends('layouts.app') {{-- Fichier resources/views/layouts/app.blade.php --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{-- Contenu --}}
                        <p>Welcome to your dashboard !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
