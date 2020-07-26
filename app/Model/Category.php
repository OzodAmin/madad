<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Model\News;

class Category extends Model implements TranslatableContract
{
	use Translatable;

    protected $table = 'category';
    public $translationModel = 'App\Model\CategoryTranslation';
    public $translatedAttributes = ['title', 'slug'];

    public static $rules = [
        'ru.title' => 'required|string|min:3|max:255',
        'uz.title' => 'required|string|min:3|max:255'
    ];

    protected static function boot() {
        parent::boot();

        static::deleting(function($object) {
            $object->deleteTranslations();
        });
    }

    public function news(){return $this->hasMany(News::class, 'category_id', 'id');}
}
