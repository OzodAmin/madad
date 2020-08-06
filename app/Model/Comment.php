<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['name'];
    protected $attributes = ['guard_name' => 'web'];
}
