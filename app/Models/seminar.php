<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;

    protected $table = "seminars";
    protected $fillable =  ['nama', 'email', 'no_hp'];
}
