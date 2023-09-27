@extends('layouts.app')

@section('content')
<br>
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
                            <strong>Position: {{ $recruitment->position->name }}</strong>
                            <br><br>
                            <p>Name: {{ $recruitment->name }} {{ $recruitment->firstname }} <br>
                                Email: {{ $recruitment->email }}</p>

                            <p>Status: {{ $recruitment->status }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection