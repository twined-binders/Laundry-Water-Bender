<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nomor', 'alamat', 'berat', 'layanan'];

    // public function setCategoryAttribute($value)
    // {
    //     $this->attributes['jenis'] = json_encode($value);
    //     // $this->attributes['layanan'] = json_encode($value);

    // }

    // public function getCategoryAttribute($value)
    // {
    //     return $this->attributes['jenis'] = json_decode($value);
    //     // return $this->attributes['layanan'] = json_decode($value);
    // }
    
}
