<?php

namespace App\Models;

use App\Models\Poliklinik;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'table_dokter';

    protected $fillable = [
        'name',
        'alamat',
        'HP',
        'jk',
        'image'
    ];

    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class);
    }
}
