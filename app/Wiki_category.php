<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wiki_category extends Model
{
    protected $table = "wiki_category";
    protected $dateFormat = 'Ymd';
    public $timestamps = true;
}
