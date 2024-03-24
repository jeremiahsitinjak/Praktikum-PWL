<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';

    public function ktm()
    {
        return $this->hasMany(Ktm::class, 'id_mahasiswa');
    }

    // protected $fillable =
    // [
    //     'nama',
    //     'nim',
    //     'jurusan',
    //     'fakultas',
    // ];
}
