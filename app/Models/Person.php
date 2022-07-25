<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = '_persons';

    protected $fillable = [
      'number_of_persons'
    ];

    public function reservation()
    {
      return $this->hasMany(Reservation::class);
    }
}
