<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shorten extends Model
{
    protected $table = 'shorten';
    protected $fillable = ['judul', 'long_url', 'short_url', 'random', 'custom_url', 'user_id', 'link_qrcode'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function history_shorten()
    {

        return $this->hasMany('App\Histroy_shorten');
    }
}
