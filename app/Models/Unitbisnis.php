<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitbisnis extends Model
{
    protected $table='unitbisnis';
    use HasFactory;
    public function Procurement()
    {
        return $this->hasMany(Procurement::class);
    }
}
