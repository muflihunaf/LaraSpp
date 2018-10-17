<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['kelas','jurusan'];
    public $timestamps = false;
    protected $primaryKey = 'id_kelas';
}
