<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoiceLang extends Model
{
	 protected $fillable = [
        'title', 'body', 'message'
    ];

    public function voice()
    {
    	return $this->belongsTo(Voice::class);
    }
}