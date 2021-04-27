<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// DON'T FORGET TO ADD THESE TWO!
use Illuminate\Auth\Events\Registered;
use App\adminTasks;
use App\adminTasks_instances;
use App\Http\Controllers\Controller as Controller;

class AdminTasksInstancesController extends Controller
{
    //

         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }


    public function show(adminTasks $task){
        
        $instances = adminTasks_instances::where('admin_tasks_id',$task->id)->get();

        return view('/admin/tasks.single', ['task' => $task , 'instances' => $instances]);
    }

    public function store_instance(adminTasks $task){
        
        $instance = adminTasks_instances::create([
            'task_description' => request('task_description'),
            'task_start_time' => request('task_start_time'),
            'task_end_time' => request('task_end_time'),
        ]); 
        
        $instance->admin_tasks_id = $task->id;
        $instance->save();

        return redirect('/admin/tasks/'.$task->id);
    }


    public function end_instance(adminTasks $task, adminTasks_instances $instance){
        $instance->update([
            'task_end_time' => request('task_end_time'),
        ]); 
        
        return redirect('/admin/tasks/'.$task->id);
    }
}
