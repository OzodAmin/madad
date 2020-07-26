<?php

return [

    // Uncomment the languages that your site supports - or add new ones.
    // These are sorted by the native name, which is the order you might show them in a language selector.
    // Regional languages are sorted by their base language, so "British English" sorts as "English, British"
    'supportedLocales' => [
        // 'en'          => ['name' => 'English','script' => 'Latn', 'native' => 'English', 'regional' => 'en'],
        'uz'     => ['name' => 'Uzbek','script' => 'Latn', 'native' => 'Oʼzbekcha', 'regional' => 'uz'],
        'ru'          => ['name' => 'Russian','script' => 'Cyrl', 'native' => 'Pусский', 'regional' => 'ru'],
    ],
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
    //Example: 'localesOrder' => ['es','en'],
    'localesOrder' => [],

    //  If you want to use custom lang url segments like 'at' instead of 'de-AT', you can use the mapping to tallow the LanguageNegotiator to assign the descired locales based on HTTP Accept Language Header. For example you want ot use 'at', so map HTTP Accept Language Header 'de-AT' to 'at' (['de-AT' => 'at']).
    'localesMapping' => [''],

    // Locale suffix for LC_TIME and LC_MONETARY
    // Defaults to most common ".UTF-8". Set to blank on Windows systems, change to ".utf8" on CentOS and similar.
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),

    // URLs which should not be processed, e.g. '/nova', '/nova/*', '/nova-api/*' or specific application URLs
    // Defaults to []
    'urlsIgnored' => ['/skipped'],

];
