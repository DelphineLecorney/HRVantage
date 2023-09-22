@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3 class="mt-4 mb-4 text-primary">Key statistics :</h3>
                    <ul>
                        <li>Total number of employees : </li>
                        <li>Vacant positions :</li>
                        <li>Recruitment in progress : </li>
                    </ul>

                    <h3 class="mt-4 mb-4 text-primary">Tasks to be carried out :</h3>
                    <ul>
                        <li>Job interview with ........ on 15/10/2023.</li>
                        <li>Finalising the job description for the junior developer position.</li>
                        <li>To approve ........'s request for leave of absence.</li>
                    </ul>

                    <h3 class="mt-4 mb-4 text-primary">Quick links :</h3>
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