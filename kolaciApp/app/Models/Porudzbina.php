<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porudzbina extends Model
{
    use HasFactory;
    protected $fillable = [
        'proizvod_id',
        'datum',
        'kolicina'
 
    ];
    public function proizvod()
    {
        return $this->belongsTo(Proizvod::class);
    }
}
