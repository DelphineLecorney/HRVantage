@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Position</h1>
    <form action="{{ route('position.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Position Name</label>
            <input type="text" name="name" id="name" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="description">Position Description</label>
            <input type="text" name="description" id="description" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Create Position</button>
        </div>
    </form>
</div>
@endsection