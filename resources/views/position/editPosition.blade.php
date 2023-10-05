@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Position</h1>
    <form action="{{ route('position.update', ['position' => $position]) }}" method="POST">
        @csrf
        @method('PUT')
        <br>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $position->name }}" autocomplete="name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ $position->description }}" autocomplete="description" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Edit Position</button>
        </div>
    </form>

    <form action="{{ route('position.destroy', ['position' => $position]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <!-- Fix with employees_position_id -->
            <button type="submit" id="submit" class="btn btn-danger">Delete Position</button>
        </div>
    </form>
</div>
@endsection