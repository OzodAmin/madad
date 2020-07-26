<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Model\Category;

class News extends Model implements TranslatableContract
{
	use Translatable;

    protected $table = 'news';
    public $translationModel = 'App\Models\NewsTranslation';
    public $translatedAttributes = ['title', 'content', 'slug'];
    protected $casts = ['user_id' => 'integer','category_id' => 'integer'];
    protected $fillable = ['user_id','category_id'];

    public static $rules = [
        'ru.title' => 'required|string|min:3|max:255',
        'uz.title' => 'required|string|min:3|max:255',
        'ru.content' => 'required|string|min:3',
        'uz.content' => 'required|string|min:3',
        'category_id' => 'required'
    ];

    protected static function boot() {
        parent::boot();

        static::deleting(function($news) {
            $news->deleteTranslations();
        });
    }

    public function category(){return $this->belongsTo(Category::class, 'category_id', 'id');}
}
