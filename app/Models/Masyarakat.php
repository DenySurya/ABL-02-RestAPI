<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;


    use HasFactory;
    // protected $guarded = ['id'];
    protected $table = 'masyarakats';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'nama_panggilan', 'nik', 'no_hp', 'alamat','detail_alamat'];
}

