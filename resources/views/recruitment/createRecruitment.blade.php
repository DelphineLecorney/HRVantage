@extends('layouts.header')

@section('content')

<div class="container">
    <h1>Create Request for Recruitment</h1>
    <form action="{{ route('recruitment.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="position_id">Position</label>
            <select name="position_id" id="position_id" class="form-control">
                @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" autocomplete="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" autocomplete="firstname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" autocomplete="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" autocomplete="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" autocomplete="city" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" id="zip_code" autocomplete="zip_code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" autocomplete="country" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Pending" selected>Pending</option>
                <option value="Approved" disabled>Approved</option>
                <option value="Rejected" disabled>Rejected</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Request for Recruitment</button>
        </div>
    </form>
</div>
@endsection