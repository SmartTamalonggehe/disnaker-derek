<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratan extends Model
{
    use HasFactory;
    
    protected $table = 'persyaratan' ;
    protected $guarded = [] ;

    public function pencaker()
    {
        return $this->belongsTo(pencaker::class);
    }
    

}
