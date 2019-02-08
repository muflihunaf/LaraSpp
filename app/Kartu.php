<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    protected $table = 'kartu';
    protected $primaryKey = 'id_kartu';
    protected $fillable = ['bulan','status','id_siswa','id_tahun','tanggal'];
    public $timestamps = false;
}
