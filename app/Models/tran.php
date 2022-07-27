<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'invoice',
        'project',
        'comment',
        
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $last_record = DB::table('trans')->latest()->first();
            $entry_number = 0;
            $zeros = 0;
            // if($last_record->date == $model->date)
            // {
            //     $prev_integer = (int)substr($last_record->invoice, -2);
            //     $entry_number = $prev_integer+1;
            //     if($entry_number>9)
            //     {
            //         $zeros = "";
            //     }
            // }
            $str = str_replace("-","",$model->date);
            $model->invoice='STSINV/'.$str.$zeros.$entry_number;
        });
    }

}
