<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

    /**
     * Show Task Dashboard
     */
Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
});    


    /**
     * Add New Task
     */
    Route::post('/', function (Request $request) {
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{task}', function (Task $task) {
        //
    });
});


