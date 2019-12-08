<?php
	
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
/*
    protected $fillable = [
        'name',
    ];
*/
   
	public $timestamps = false;	
    
    /**
     * The tasks that belong to the tag.
     */
    public function tasks()
    {
        return $this->belongsToMany('App\Task', 'tag_task');
    }  
}