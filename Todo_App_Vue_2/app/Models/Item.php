<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'completed', 'day_of_week', 'time_of_day'];
}
