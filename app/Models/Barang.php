<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // pilih salah satu antara fillable atau guarded
    protected $fillable = ['nama','deskripsi','stok'];
    // protected $guarded = [];
}
