<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model implements TranslatableContract
{
	use Translatable;

    protected $table = 'projects';
    public $timestamps = false;
    public $translationModel = 'App\Model\ProjectTranslation';
    public $translatedAttributes = ['title', 'content', 'slug','short_des','meta_des'];
    protected $fillable = ['featured_image'];

    public static $rules = [
        'ru.title' => 'required|string|min:3|max:255',
        'uz.title' => 'required|string|min:3|max:255',
        'ru.content' => 'required|string|min:3',
        'uz.content' => 'required|string|min:3'
    ];

    protected static function boot() {
        parent::boot();

        static::deleting(function($news) {
            $news->deleteTranslations();
        });
    }
}
