<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
	 protected $fillable = [
        'image'
    ];

    public function voiceLang()
    {
    	return $this->hasMany(VoiceLang::class);
    }

}