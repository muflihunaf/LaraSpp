<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nisn','nama','kelas','jurusan'];
    public $timestamps = false;
}
