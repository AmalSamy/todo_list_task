<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task; 

class TaskController extends Controller
{
    function task() {
     return view('tasks.task');

    } 

    function viewtask() {
        $tasks = Task::all();
        return view('tasks.viewtask', compact('tasks'));
    }

   function posttask(Request $requset) {
            $requset->validate([
                'task'=> 'required | string ',
                'date'=> 'required',
            ]);

            Task::create([
                'task'=> $requset->task,
                'date'=> $requset->date,
            ]);
            return redirect()->route('tasks.viewtask');

        }


        function edit($id){
            $task = Task::find($id);
            return view('tasks.edittask',compact('task'));
        }

        
        function update(Request $requset){
            
            $task = Task::query()->findOrFail($requset->id); 
            $task->update([
                'task'=> $requset->task,
                'date'=> $requset->date,

            ]);
            return redirect()->route('tasks.viewtask');


        }
        public function delete($id)
{
      $task = Task::findOrFail($id);
    $task->delete();

    // التحقق هل لا تزال هناك مهام
    $remainingTasks = Task::count();

    if ($remainingTasks == 0) {
        // إذا لا توجد مهام، رجوع للصفحة الرئيسية
        return redirect()->route('tasks.task');
    } else {
        // إذا يوجد مهام، رجوع لنفس الصفحة
        return redirect()->back();
    }
}
        
    }
