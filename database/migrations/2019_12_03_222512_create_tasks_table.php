<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
	        $table->engine = "InnoDB";	        
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('user_id')->nullable();
			//$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');         
			            
            $table->string('title', 1024);
            $table->text('description');         
            $table->timestamps();
            
            $table->index('user_id');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}