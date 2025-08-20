<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [ 'nama_lengkap', 'id_majore', 'nik', 'kartu_keluarga', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_terakhir', 'nama_sekolah', 'kejuruan', 'nomor_hp', 'email', 'aktivitas_saat_ini', 'status'] ;
}
