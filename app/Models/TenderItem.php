<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'tender_id',
        'batch_id',
        'vat_id',
        'service_charge',
    ];
}
