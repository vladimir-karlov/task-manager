@extends('layouts.app')

@section('content')
    <div class="container">
	        <div class="row">
	            <div class="col-md-12 col-md-offset-2">
	                <div class="panel panel-default">
<!-- 	                    <div class="panel-heading">Tasks</div> -->
	
	                    <div class="panel-body table-responsive">
					        
						<Task></Task>					        
					        
<!--
					        <router-view name="Task">
					        </router-view>					        
					
					        <router-view></router-view>
-->
					
					        <vue-progress-bar></vue-progress-bar>
    
	                    </div>
	                </div>
	            </div>
	        </div>

    </div>
@endsection