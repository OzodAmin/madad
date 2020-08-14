<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Partner extends Model implements TranslatableContract
{
	use Translatable;

    protected $table = 'partner';
    public $timestamps = false;
    public $translationModel = 'App\Model\PartnerTranslation';
    public $translatedAttributes = ['name', 'position', 'short_des','description'];
    protected $fillable = ['featured_image', 'url'];

    public static $rules = [
        'ru.name' => 'required|string|min:3|max:255',
        'uz.name' => 'required|string|min:3|max:255',
        'url' => 'required|string|min:3|max:255',
    ];

    protected static function boot() {
        parent::boot();

        static::deleting(function($partner) {
            $partner->deleteTranslations();
        });
    }
}
