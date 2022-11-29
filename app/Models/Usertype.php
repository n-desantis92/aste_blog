<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    use HasFactory;

    //MASS ASSIGNEMENT
    protected $guarded = [];

    //RELAZIONI
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

