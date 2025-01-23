<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak menggunakan nama default yang berupa jamak
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    // Tentukan kolom-kolom yang dapat diisi (fillable)
    protected $fillable = ['nama_kategori'];

    // Jika kamu ingin menambahkan timestamp (created_at, updated_at)
    public $timestamps = false;
}
