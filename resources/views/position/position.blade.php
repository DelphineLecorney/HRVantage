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
            <br>
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Existing Positions in the Company
                        &nbsp; &nbsp; &nbsp; <a href="{{ route('position.create') }}" class="btn btn-primary float-right">Add Position</a>
                    </h1>
                </div>
                <div class="card-body">
                    @foreach ($positions as $position)
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">{{ $position->name }}</h5>
                                <p class="card-text">{{ $position->description }}</p>
                            </div>
                            <a href="{{ route('position.edit', ['position' => $position]) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection