<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utama extends Model
{
     protected $table = 'utama';
    protected $fillable = ['nama_toko','deskripsi','logo','shopee','wa'];
}
