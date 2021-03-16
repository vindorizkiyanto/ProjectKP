<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History_shorten extends Model
{
    protected $table = 'history_shorten';
    protected $fillable = ['ip_address', 'mac_address', 'shorten_id'];

    public function shorten()
    {

        return $this->belongsTo('App\Shorten');
    }
}
