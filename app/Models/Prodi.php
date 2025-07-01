<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';
    protected $primaryKey = 'ID'; // WAJIB agar Laravel tahu primary key-nya bukan 'id'
    public $incrementing = true;  // Jika ID auto-increment, tetap true
    protected $keyType = 'int';   // Sesuaikan dengan tipe kolom ID di database (biasanya integer)

    protected $fillable = ['nama', 'kaprodi', 'jurusan'];

    public $timestamps = false;


    public function getRouteKeyName()
    {
        return 'ID'; // Supaya route model binding pakai kolom ID
    }

    public function mahasiswa()
    {
    return $this->hasMany(Mahasiswa::class, 'id_prodi', 'ID');
    }

}
