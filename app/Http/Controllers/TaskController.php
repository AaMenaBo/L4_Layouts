<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', [
            'task' => $task
        ]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Task::create($data);

        return redirect()->route('tasks.index');
    }
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $task->fill($data)->save();

        return redirect()->route('tasks.index');
    }
    public function edit($id)
    {
        return view('tasks.edit', [
            'task' => Task::find($id)
        ]);
    }
    public function delete($id)
    {
        Task::destroy($id);
        return redirect()->route('tasks.index');
    }
    public function complete($id)
    {
        $task = Task::find($id);
        $task->completed = 1;
        $task->save();
        return redirect()->route('tasks.index');
    }
}
