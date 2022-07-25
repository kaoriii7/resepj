<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $table = '_times';

    protected $fillable = [
      'reservation_time'
    ];

    public function reservation()
    {
      return $this->hasMany(Reservation::class);
    }
}
