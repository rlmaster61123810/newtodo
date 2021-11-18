@extends('layouts.app')


@section('content')

    <h1>Task list</h1>
    <div class="card">
        <ul>
            @foreach ($tasks as $task)
                <li>
                    {{ $task->description }}
                </li>
            @endforeach
    </div>
    </ul>
    <a href="/tasks/create"class="btn btn-primary">Create</a>
@endsection
