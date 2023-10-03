@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Employee</h1>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="position_id">Position</label>
            <select name="position_id" id="position_id" class="form-control">
                @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="position_id">Position</label>
            <select name="position_id" id="position_id" class="form-control">
                @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Create Employee</button>
        </div>
        @endsection