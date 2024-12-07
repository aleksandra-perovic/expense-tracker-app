<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{

    use HasFactory;

    protected $fillable = [
        'amount',
        'descrpition',
        'currency',
        'date',
        'status',
        'expense_category_id',
        'user_id',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
    public function expenseCategories(){
        return $this->belongTo(ExpenseCategory::class);
    }
    protected $casts = [
        'date'=>'date', //ovo osigurava da se 'date' pretvara u Carbon instancu
    ];

}
