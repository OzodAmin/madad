<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model 
{
    protected $table = 'consultant';
    public $timestamps = false;
    protected $fillable = ['name_ru','name_uz','position_ru','position_uz','description_ru','description_uz','phone','email','featured_image'];

    public static $rules = [
        'name_ru' => 'required|string|min:3|max:255',
        'name_uz' => 'required|string|min:3|max:255',
        'position_ru' => 'required|string|min:3|max:255',
        'position_uz' => 'required|string|min:3|max:255',
    ];
}
     