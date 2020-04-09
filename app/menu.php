<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table="menu";
    protected $primarykey="id_menu";
    protected $fillable=['id_menu', 'nm_menu', 'harga_menu', 'kategori']
    public $timestamps=false;
}
