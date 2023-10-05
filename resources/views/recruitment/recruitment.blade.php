@extends('layouts.app')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Recruitments with Positions</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($recruitments as $recruitment)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Position: {{ $recruitment->position->name }}</strong>
                                    <p>Name: {{ $recruitment->name }} {{ $recruitment->firstname }} <br>Email: {{ $recruitment->email }}</p>
                                    <p>Status: {{ $recruitment->status }}</p>
                                </div>
                                <a href="{{ route('recruitment.edit', ['recruitment' => $recruitment]) }}" class="btn btn-primary">Edit</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection