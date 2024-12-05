<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'descrpition',
        'target_amount',
        'current_ammount',
        'deadline',
        'status',
        'user_id',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
}
