<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan' ;
    protected $guarded = [] ;

    public function pencaker()
    {
        return $this->belongsTo(pencaker::class);
    }
}
