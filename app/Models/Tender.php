<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'vat_id',
        'tender_method_id',
        'tender_method',
        'last_selling_date',
        'total_charge',
        'status',
        'created_by',
    ];

    public static $rules = [
        'vat_id'            => 'required',
        'tender_method'     => 'required',
        'last_selling_date' => 'required',
        'service_charge'    => 'required',
        'total_charge'      => 'required',
        'status'            => 'required',
    ];
}
