<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = '_reservations';

    protected $fillable = [
      'user_id', 'shop_id', 'reservation_date', 'time_id', 'person_id'
    ];

    public function time()
    {
      return $this->belongsTo(Time::class);
    }

    public function person()
    {
      return $this->belongsTo(Person::class);
    }
}
