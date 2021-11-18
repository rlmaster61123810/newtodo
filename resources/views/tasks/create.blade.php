@extends('layouts.app')
@section('content')
    <h1>Task list</h1>
    <form method="POST" action="/tasks/store">
        @csrf
        <div class="from-group">
            <label for="descripion"> Task Description</label>
            <input class="form-control" name="descripion" />
        </div>

        <div class="from-group">
            <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
@endsection
