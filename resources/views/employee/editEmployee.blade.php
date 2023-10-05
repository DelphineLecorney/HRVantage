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
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="{{ $employee->firstname }}" autocomplete="firstname" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ $employee->email }}" autocomplete="email" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ $employee->phone }}" autocomplete="phone" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="{{ $employee->address }}" autocomplete="address" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="{{ $employee->city }}" autocomplete="city" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" id="zip_code" value="{{ $employee->zip_code }}" autocomplete="zip_code" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" value="{{ $employee->country }}" autocomplete="country" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Edit Employee</button>
        </div>
    </form>

    <form action="{{ route('employee.destroy', ['employee' => $employee]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-danger">Delete Employee</button>
        </div>
    </form>
</div>
@endsection