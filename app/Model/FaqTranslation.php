<?php

namespace App\Model;

use Eloquent as Model;
use Illuminate\Support\Str;

class FaqTranslation extends Model
{
    public $timestamps = false;
    public $table = 'faq_translations';
    public $fillable = ['question', 'answer'];
}