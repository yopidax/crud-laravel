<?php

namespace App\Http\Controllers;

use App\Task;
use Validator;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    /**
     * Index page;
     *
     * @return Response
     */
     public function index() {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Create task.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }

    /**
     * Delete task.
     *
     * @param Task $task
     *
     * @return Response
     */
    public function delete(Task $task) {
        $task->delete();
        return redirect('/');
    }
}
