<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::orderBy('created_at', 'DESC')->paginate();

        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        $tags = Tag::pluck('description', 'id')->toArray();

        return view('tasks.create', compact('tags'));
    }
    public function store(Request $request)
    {
        $pos = auth()->user()->tasks()->save(new Task($request->all()));

        $pos->tags()->sync($request->input('category'));

        return redirect('tasks.index');
    }
}
