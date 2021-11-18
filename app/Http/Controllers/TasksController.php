<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();


        return view('tasks.index', ['tasks'=>$tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|max:255',
        ]);

        $task = new Task();
        $task->description = $request->description;
        $task->save();

        return redirect('/');
    }
}
