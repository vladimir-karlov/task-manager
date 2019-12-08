<?php

namespace App\Http\Controllers\API;

use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $tasks = Task::with('user','tags')->get();
	    
	    return $tasks;	    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	    	    
        $this->validate($request, 
	        [
	            'title' => 'required',
	            'description' => 'required',
	            'selected_user_id' => 'required',
	            'selected_tags' => 'required',            
	        ],
	        [
		        'selected_user_id.required' => 'Please select a user',
		        'selected_tags.required' => 'Please select at least one tag',		        		        	        
	        ]
        );
        
        $task = new Task;
        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->user()->associate($request['selected_user_id']);
        $task->save();  
        
        // get the tag ids coming from vue multiselect
        $tag_ids = array_column($request['selected_tags'], 'id');
        $task->tags()->sync($tag_ids);     
		
        $task->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return Task::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, 
	        [
	            'title' => 'required',
	            'description' => 'required',
	            'selected_user_id' => 'required',
	            'selected_tags' => 'required',            
	        ],
	        [
		        'selected_user_id.required' => 'Please select a user',
		        'selected_tags.required' => 'Please select at least one tag',		        		        	        
	        ]
        );

        $task = Task::findOrFail($id);
        
        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->user()->associate($request['selected_user_id']);
        
        // get the tag ids coming from vue multiselect
        $tag_ids = array_column($request['selected_tags'], 'id');
        $task->tags()->sync($tag_ids);     
		
        $task->update();        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
		$task->tags()->detach();    
        $task->delete();
        return response()->json([
         'message' => 'Task deleted successfully'
        ]);
    }
}