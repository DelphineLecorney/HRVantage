@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form action=" {{ route('employee.update', ['employee' => $employee]) }}," method="POST">
        @csrf
        @method('PUT')
        <br>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $employee->name }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ $employee->email }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ $employee->phone }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="{{ $employee->address }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="{{ $employee->city }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" id="zip_code" value="{{ $employee->zip_code }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" value="{{ $employee->country }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Edit Employee</button>

            <form action="{{ route('employee.destroy', ['employee' => $employee]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" id="submit" class="btn btn-danger">Delete Employee</button>
            </form>
        </div>
    </form>
</div>
@endsection