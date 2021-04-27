<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// DON'T FORGET TO ADD THESE TWO!
use Illuminate\Auth\Events\Registered;
use App\adminTasks;
use App\adminTasks_instances;
use App\Company;
use App\Http\Controllers\Controller as Controller;

class AdminTasksController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
        
        // Renders a list of a resource

        $tasks = adminTasks::all();
        $companies = Company::all();
        return view('/admin/tasks.index', ['tasks' => $tasks , 'companies' => $companies]);
    }


    public function store_task()
    {
        $task = adminTasks::create([
            'task_name' => request('task_name'),
            'company_id'=> request('task_company'),

        ]); 
        
      

        return redirect('/admin/tasks');
        
          
        
    }

}
