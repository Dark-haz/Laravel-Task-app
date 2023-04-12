<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;
    
    protected $fillable=[
        'pname', 'description' , 'user_id'
    ];
    use HasFactory;

    //relashionship to user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    //relashionship to tasks
    public function tasks(){
        return $this->hasMany(Task::class,'project_id');
    }
}
