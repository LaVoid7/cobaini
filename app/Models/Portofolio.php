<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table='portofolio';
    use HasFactory;
    public function Procurement()
    {
        return $this->hasMany(Procurement::class);
    }
}
