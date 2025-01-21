<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = "id_barang";
    protected $table = "barang";
    public $timestamps = false;
    protected $fillable = ['nama_barang', 'deskripsi', 'kategori', 'stok'];

}
