@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h1>Social Benefit</h1>
            <br>
            <!-- Formule 1 -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2>basic formula</h2>
                </div>
                <div class="card-body">
                    <p>Our basic package includes the following benefits:</p>
                    <ul>
                        <li>Health insurance</li>
                        <li>Dental insurance</li>
                        <li>Assurance vie</li>
                        <li>Wellness program</li>
                    </ul>
                </div>
            </div>

            <!-- Formule 2 -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Premium package</h2>
                </div>
                <div class="card-body">
                    <p>Opt for our Premium package and benefit from all the advantages of the basic package, as well as :</p>
                    <ul>
                        <li>Vision insurance</li>
                        <li>Pension plan with company contributions</li>
                        <li>Childcare allowance</li>
                    </ul>
                </div>
            </div>

            <!-- Formule 3 -->
            <div class="card">
                <div class="card-header">
                    <h2>Customized formula</h2>
                </div>
                <div class="card-body">
                    <p>Do you have specific needs? Create your personalized package by selecting the benefits that suit you best.</p>
                    <p>Contact our Human Resources team for more information on customization options.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection