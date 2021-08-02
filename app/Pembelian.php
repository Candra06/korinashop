<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['nama_pembeli', 'email_pembeli', 'telepon_pembeli', 'alamat_pembeli', 'catatan', 'id_produk', 'jumlah'];
}
