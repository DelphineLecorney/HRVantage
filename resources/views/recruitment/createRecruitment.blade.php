@extends('layouts.header')

@section('content')
<div class="container">
    <h1>Create Request for Recruitment</h1>
    <form action="{{ route('recruitment.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="position_id">Position</label>
            <select name="position_id" id="position_id" class="form-control">

            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" class="form-control" required>
            <button type="submit" class="btn btn-primary">Create Recruitment</button>
    </form>
</div>
@endsection