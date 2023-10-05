@extends('layouts.app')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <br>
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Employee List &nbsp; &nbsp; &nbsp;<a href="{{ route('employee.create') }}" class="btn btn-primary float-right">Add Employee</a></h1>

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->firstname }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->city }}</td>
                                <td>{{ $employee->zip_code }}</td>
                                <td>{{ $employee->country }}</td>
                                <td>
                                    <form action="{{ route('employee.destroy', ['employee' => $employee]) }}" method="POST">
                                        <a href="{{ route('employee.edit', ['employee' => $employee]) }}" class="btn btn-warning">Edit</a>
                                    </form>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection