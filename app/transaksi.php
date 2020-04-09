<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table="transaksi";
    protected $primarykey="id_transaksi";
    protected $fillable=['id_transaksi', 'nomor_meja', 'total_harga', 'status']
    public $timestamps=false;
}
