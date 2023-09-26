@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Existing Positions in the Company</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($positions as $position)
                        <li class="list-group-item">
                            <strong>{{ $position->name }}</strong>
                            <p>{{ $position->description }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection