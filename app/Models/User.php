<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        "username",
        "remember_token",
    ];
    protected $hidden = [
        "password"
    ];
    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime",
    ];
}
