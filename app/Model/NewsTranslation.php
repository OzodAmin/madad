<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Support\Str;

class NewsTranslation extends Model
{
	public static function boot() {
        parent::boot();
        static::creating( function($news_translations) {
            $news_translations->slug = Str::slug($news_translations->title);
            $latest_slug =static::whereRaw("slug RLIKE '^{$news_translations->slug}(-[0-9]*)?$'")
                                    ->latest('id')
                                    ->value('slug');

            if( $latest_slug ) {
                $pieces = explode('-', $latest_slug);
                $number = intval(end($pieces));
                $news_translations->slug .= '-' . ($number + 1);
            }

        });
    }
    public $timestamps = false;
    public $table = 'news_translations';
    public $fillable = ['title', 'content', 'slug','short_des'];
}