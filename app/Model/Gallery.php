<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Model\GalleryImages;

class Gallery extends Model implements TranslatableContract
{
	use Translatable;

    protected $table = 'gallery';
    public $timestamps = false;
    public $translationModel = 'App\Model\GalleryTranslation';
    public $translatedAttributes = ['title', 'slug'];
    protected $fillable = ['event_date'];

    public static $rules = [
        'ru.title' => 'required|string|min:3|max:255',
        'uz.title' => 'required|string|min:3|max:255',
    ];

    protected static function boot() {
        parent::boot();

        static::deleting(function($news) {
            $news->deleteTranslations();
        });
    }

    public function images(){return $this->hasMany(GalleryImages::class, 'gallery_id', 'id');}
}
