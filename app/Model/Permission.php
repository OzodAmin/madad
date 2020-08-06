<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'comment';
    protected $fillable = ['name','email','phone','content','news_id'];
    protected $casts = ['news_id' => 'integer'];
    public $timestamps = false;
}
