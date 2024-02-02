<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Makanan extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primaryKey = 'kode_makanan';

    public $incrementing = false; //untuk memberikan kode pk tidak auto increment

    protected $fillable = [
        'kode_makanan',
        'nama',
        'kategori',
        'harga',
        'ket',
    ];

}