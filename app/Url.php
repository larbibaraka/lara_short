<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected  $fillable=['url','url_id','url_shorter',"user_id"];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
