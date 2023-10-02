<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    protected $table='custommer';
    use HasFactory;
    public function Procurement()
    {
        return $this->hasMany(Procurement::class);
    }
}
