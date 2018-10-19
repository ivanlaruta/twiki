<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wiki_file extends Model
{
    protected $table = "wiki_file";
    protected $dateFormat = 'Ymd';
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\Wiki_category','id_category');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Wiki_subCategory','id_subCategory');
    }
}
