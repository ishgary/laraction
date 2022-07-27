<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tran extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date',
        'paid_by_to',
        'amount',
        'quantity',
        'unit',
        'total',
        'type',
        'status',
        'utr',
        'project',
        'comment',
        
    ];

}
