@extends('layouts.app')


@section('content')

    <body>

        <h1>Task list</h1>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    {{ $task->description }}
                </li>

            @endforeach
        </ul>
    @endsection
