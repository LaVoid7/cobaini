<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisanggaran extends Model
{
    protected $table='jenisanggaran';
    use HasFactory;
    public function Procurement()
    {
        return $this->hasMany(Procurement::class);
    }
}
