<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use Notifiable;
    protected $table = 'siswa';
    protected $guard = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['nisn','nama','id_kelas','password'];
    public $timestamps = false;
}
