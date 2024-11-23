<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    protected $task;
    public function __construct()
    {
        $this->task = new Todo();
    }

    public function index(){
        $recode['tasks'] = $this->task->all();
        return view('pages.todo.index')->with($recode);
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->back();
    }

    public function delete($task_id){
        $DelTask = $this->task->find($task_id);
        $DelTask->delete();
        return redirect()->back();
    }

    public function done($task_id){
        $UPTask = $this->task->find($task_id);
        $UPTask->Done = 1;
        $UPTask->update();
        return redirect()->back();
    }
}
