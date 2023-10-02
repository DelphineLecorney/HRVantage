@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Request for Recruitment</h1>
    <form action="{{ route('recruitment.update', ['recruitment' => $recruitment]) }}" method="POST">
        @csrf
        @method('PUT')
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
            <input type="text" name="name" id="name" value="{{ $recruitment->name }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="{{ $recruitment->firstname }}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="name" value="{{ $recruitment->email }}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" autocomplete="name" value="{{ $recruitment->phone }}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" autocomplete="name" value="{{ $recruitment->address }}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" autocomplete="name" value="{{ $recruitment->city }}" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="zip_code">Zip Code</label>
            <input type="text" name="zip_code" id="zip_code" value="{{ $recruitment->zip_code }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" value="{{ $recruitment->country }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" value="{{ $recruitment->status }}" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Request for edit Recruitment</button> &nbsp; &nbsp; &nbsp; &nbsp;

            <form action="{{ route('recruitment.destroy', ['recruitment' => $recruitment]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </form>
</div>
@endsection