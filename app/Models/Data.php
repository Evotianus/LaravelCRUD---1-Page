<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['kodebarang', 'nama', 'jenis', 'merk', 'satuan', 'jlh_stok', 'hargajual', 'hargabeli', 'ket'];
}
