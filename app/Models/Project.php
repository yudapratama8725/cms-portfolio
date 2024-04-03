<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, softDeletes;

    protected $guarded = [
        'id'
    ];

    public function tools(){
        return $this->belongsToMany(Tool::class, 'project_tools', 'project_id', 'tool_id');
    }
}
