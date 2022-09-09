<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'photo',
        'address',
        'about',
    ];

    public static $rules = [
        "email"   => 'required|max:255|unique:profiles,email',
        "address" => 'required|max:255',
        // "about"   => 'required|min:5',
        "photo"   => 'required|mimes:jpg,webp,png|file',
    ];
}
