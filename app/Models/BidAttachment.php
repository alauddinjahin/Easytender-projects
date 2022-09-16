<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'bid_id',
        'client_id',
        'freelancr_id',
        'tender_id',
        'phone',
        'attachment',
    ];

    public static $rules = [
        "bid_id"       => 'required',
        "client_id"    => 'required',
        "freelancr_id" => 'required',
        "tender_id"    => 'required',
        "phone"        => 'required',
        "attachment"   => 'required',
    ];
}
