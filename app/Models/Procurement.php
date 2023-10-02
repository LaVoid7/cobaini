<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;
    protected $table='procurements';

    public function jenisAnggaran()
    {
        return $this->belongsTo(jenisanggaran::class, 'jenis_anggaran');
    }

    public function custommer()
    {
        return $this->belongsTo(custommer::class, 'custommer');
    }

    public function portofolio()
    {
        return $this->belongsTo(portofolio::class, 'portofolio');
    }

    public function status()
    {
        return $this->belongsTo(status::class, 'status');
    }

    public function unitbisnis()
    {
        return $this->belongsTo(unitbisnis::class, 'unit_bisnis');
    }

}
