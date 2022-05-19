<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pencaker extends Model
{
    use HasFactory;


    protected $table = 'pencaker';
    protected $guarded = [];

    public function kelurahan()
    {
        return $this->belongsTo(kelurahan::class);
    }

    public function pendidikan()
    {
        return $this->hasOne(pendidikan::class, 'pencaker_id', 'id');
    }

    public function kartukuning()
    {
        return $this->hasOne(kartuKuning::class, 'pencaker_id', 'id');
    }
}
