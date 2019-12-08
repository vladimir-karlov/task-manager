<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description'
    ];
    	
    /**
     * The tags that belong to the task.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
    /**
     * Get the user for the task.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
