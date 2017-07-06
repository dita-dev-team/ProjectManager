<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'section', 'body'
    ];
    protected $table = 'content';

    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}
