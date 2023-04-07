<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    
    protected $fillable=[
        'tname', 'description'
    ];
    use HasFactory;

    //relashionship to project
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
