<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectOrder extends Model
{
    use HasFactory, softDeletes;

    protected $guarded = [
        'id'
    ];
}
