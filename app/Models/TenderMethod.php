<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
    ];

    public static $rules = [
        "name"            => 'required|max:255|unique:tender_methods,name',
        "short_name"      => 'required|max:128|unique:tender_methods,short_name',
    ];
}
