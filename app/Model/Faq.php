<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Faq extends Model implements TranslatableContract
{
	use Translatable;

    protected $table = 'faq';
    public $translationModel = 'App\Model\FaqTranslation';
    public $translatedAttributes = ['question', 'answer'];

    public static $rules = [
        'ru.question' => 'required|string|min:3|max:255',
        'uz.question' => 'required|string|min:3|max:255',
        'ru.answer' => 'required|string|min:3',
        'uz.answer' => 'required|string|min:3'
    ];

    protected static function boot() {
        parent::boot();

        static::deleting(function($obj) {
            $obj->deleteTranslations();
        });
    }
}
