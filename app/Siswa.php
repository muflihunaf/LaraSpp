<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nisn','nama','id_kelas'];
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;
}
