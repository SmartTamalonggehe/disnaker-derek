<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;

    protected $table = 'kelurahan' ;
    protected $guarded = [] ;

    public function distrik()
    {
        return $this->belongsTo(distrik::class);
    }
}
