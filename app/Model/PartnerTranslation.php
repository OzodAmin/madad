<?php
namespace App\Model;
use Eloquent as Model;

class PartnerTranslation extends Model
{
    public $timestamps = false;
    public $table = 'partner_translation';
    public $fillable = ['name', 'position', 'short_des','description'];
}