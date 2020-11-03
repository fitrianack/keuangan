<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $fillable = ['uang_masuk', 'uang_keluar', 'saldo', 'keterangan'];
}
