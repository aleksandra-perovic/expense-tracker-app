<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'descrpition',
        'source',
        'currency',
        'date',
        'user_id',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }

    protected $casts = [
        'date'=>'date', //ovo osigurava da se 'date' pretvara u Carbon instancu
    ];
}
