@extends('layouts.header')

@section('content')
<main class="container">

    <section id="sign-in-section" class="description">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-5">Discover HRVantage</h2>
                    <p>HRVantage is the complete HR management solution designed to streamline HR processes, manage employee information and facilitate HR operations.</p>
                    <p>It's a web-based application that allows you to manage your employees and their information simply and effectively.</p>
                    <p>Discover how HRVantage can help you optimise the management of your human resources.</p>
                    <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                </div>
                <div class="col-md-6">
                    <img src="/images/screenDashboard.JPG" width="400" alt="HRVantage" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <h2 class="mt-5">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Employee management</h5>
                            <p class="card-text">Easily manage your employees' information</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/images/screenEmployees.JPG" alt="HRVantage" class="img-fluid">
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Job management</h5>
                            <p class="card-text">Organise and monitor jobs within your company.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/images/screenRecruitments.JPG" alt="HRVantage" class="img-fluid">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Benefits management</h5>
                            <p class="card-text">Manage all your employees' social benefits.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/images/screenBenefit.JPG" alt="HRVantage" class="img-fluid">
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <h2 class="mt-5">What our users say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial">
                    <blockquote class="blockquote">
                        <p>"HRVantage has transformed our human resources management. It's an essential tool for our business."</p>
                        <footer class="blockquote-footer">Paul Magny, <cite title="Source Title">CEO of Portal Company</cite></footer>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <blockquote class="blockquote">
                        <p>"We've become more efficient thanks to HRVantage. Managing employees has never been easier."</p>
                        <footer class="blockquote-footer">Marie Dupont, <cite title="Source Title">HR Director, Maped Corporation</cite></footer>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <blockquote class="blockquote">
                        <p class="quote">"A comprehensive, user-friendly HR solution. We're delighted to have chosen it."</p>
                        <footer class="blockquote-footer">Jean-Luc Tremblay <cite title="Source Title">Head of Human Resources, Colruyt Inc.</cite></footer>
                </div>
            </div>
        </div>
    </section>


    <section id="register-section" class="description">
        <h2 class="mt-5">Sign in or register</h2>
        <br>
        <a class="btn btn-outline-success" href="{{ route('register') }}">Registrer</a>
        <a class="btn btn-outline-primary" href="{{ route('login') }}">Sign in</a>
    </section>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <br>
</main>
@endsection