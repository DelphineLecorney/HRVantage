@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header mt-4 mb-4 text-center">
                    <h2 class="text-dark display-4">Welcome, {{ $user->name }} !</h2>
                </div>

                <div class="card-body">
                    <h3 class="mt-4 mb-4 text-muted" style="--bs-text-opacity: .5;">Key statistics :</h3>
                    <ul>
                        <li>Total number of employees :
                            @php
                            $response = app(\App\Http\Controllers\DashboardController::class)->getNumberOfEmployees();
                            $data = json_decode($response->content(), true);
                            echo $data['Number of employees'];
                            @endphp
                        </li>
                        <li>Vacant positions :</li>
                        <li>Recruitment in progress : </li>
                    </ul>

                    <h3 class="mt-4 mb-4 text-muted" style="--bs-text-opacity: .5;">Tasks to be carried out :</h3>
                    <ul>
                        <li>Job interview with ........ on 15/10/2023.</li>
                        <li>Finalising the job description for the junior developer position.</li>
                        <li>To approve ........'s request for leave of absence.</li>
                    </ul>

                    <h3 class="mt-4 mb-4 text-muted" style="--bs-text-opacity: .5;">Quick links :</h3>
                    <ul>
                        <li><a href="{{ route('employee') }}">Managing employees</a></li>
                        <li><a href="{{ route('position') }}">Managing jobs</a></li>
                        <li><a href="{{ route('recruitment') }}">Managing recruitment</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection