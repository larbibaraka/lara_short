<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected  $fillable=['url','url_id','url_shorter'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
