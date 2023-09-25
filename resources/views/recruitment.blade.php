@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Details of Recruitment</h1>

            <div class="card">
                <div class="card-header">
                    <h2>{{ $recruitment->name }} {{ $recruitment->firstname }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>Position:</strong> {{ $recruitment->position->name }}</p>
                    <p><strong>Email:</strong> {{ $recruitment->email }}</p>
                    <p><strong>Phone:</strong> {{ $recruitment->phone }}</p>
                    <p><strong>Address:</strong> {{ $recruitment->address }}</p>
                    <p><strong>City:</strong> {{ $recruitment->city }}</p>
                    <p><strong>Zip Code:</strong> {{ $recruitment->zip_code }}</p>
                    <p><strong>Country:</strong> {{ $recruitment->country }}</p>
                    <p><strong>Document:</strong> {{ $recruitment->document }}</p>
                    <p><strong>Status:</strong> {{ $recruitment->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection