<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
     protected $table = 'katalog';
    protected $fillable = ['judul','harga','deskripsi','jenis_baju','ukuran','foto','atas'];
}
