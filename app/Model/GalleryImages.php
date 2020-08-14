<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{

    protected $table = 'gallery_images';
    public $timestamps = false;
    protected $fillable = ['title_ru','title_uz','featured_image'];

    public static $rules = [
        'title_ru' => 'required|string|min:3|max:255',
        'title_uz' => 'required|string|min:3|max:255',
    ];
}
