<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('id', 'desc')->get();
        return view('todos.index', compact('todos'));
    }

    // Store a new to-do item
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);
        Todo::create(['title' => $request->title]);
        return redirect()->back();
    }

    // Cross or uncross a to-do item
    public function toggleComplete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->is_completed = !$todo->is_completed; // Toggle completion status
        $todo->save();
        return redirect()->back();
    }

    // Delete a to-do item
    public function destroy($id)
    {
        Todo::findOrFail($id)->delete();
        return redirect()->back();
    }
}
