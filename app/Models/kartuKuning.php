<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartuKuning extends Model
{
    use HasFactory;

    protected $table = 'kartu_kuning';
    protected $guarded = [];

    public function pencaker()
    {
        return $this->hasOne(pencaker::class, 'id', 'pencaker_id');
    }
}
