@extends('layouts.header')

@section('content')
<main class="container">

    <section id="description">
        <h2 class="mt-5">Description</h2>
        <p>HRVantage is a comprehensive human resources management system designed to simplify HR processes, manage employee information and facilitate HR operations.</p>
        <p>You can register to access more features.</p>
    </section>

    <section id="features">
        <h2 class="mt-5">Features</h2>
        <ul class="list-group">
            <li class="list-group-item">Employee management</li>
            <li class="list-group-item">Job management</li>
            <li class="list-group-item">Benefits management</li>
            <li class="list-group-item">Training management</li>
            <li class="list-group-item">Vacation management</li>
        </ul>
    </section>

    <section id="description">
        <h2 class="mt-5">Sign in or register</h2>
        <br>
        <a class="btn btn-outline-success" href="{{ route('register') }}">Registrer</a>
        <a class="btn btn-outline-primary" href="{{ route('login') }}">Sign in</a>
    </section>
    <br>
</main>
@endsection