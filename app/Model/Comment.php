<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\News;

class Comment extends Model
{
	protected $table = 'comment';
    protected $fillable = ['name','email','phone','content','news_id'];
    protected $casts = ['news_id' => 'integer'];
    public $timestamps = false;

    public function news(){return $this->belongsTo(News::class, 'news_id', 'id');}
}
