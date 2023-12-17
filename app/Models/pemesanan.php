<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $fillable = ['meja_id', 'tgl_pemesanan', 'jam_mulai', 'jam_selesai', 'nama_pemesan', 'jml_pelanggan'];
}
