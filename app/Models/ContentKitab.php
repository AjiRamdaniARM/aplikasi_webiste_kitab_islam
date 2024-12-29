<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentKitab extends Model
{
    use HasFactory;

    protected $table = 'content_kitabs';

    protected $fillable = [
        'id_islami_kitabs',
        'id_kitab_details',
        'id_kitab_hadits',
        'id_status_kitabs',
        'id_latin_arabs',
    ];

    // Relasi ke IslamiKitab
    public function islamiKitab()
    {
        return $this->belongsTo(IslamiKitab::class, 'id_islami_kitabs');
    }

    // Relasi ke DetailKitab
    public function detailKitab()
    {
        return $this->belongsTo(DetailKitab::class, 'id_kitab_details');
    }

    // Relasi ke KitabHadits
    public function kitabHadits()
    {
        return $this->belongsTo(KitabHadits::class, 'id_kitab_hadits');
    }

    // Relasi ke StatusKitab
    public function statusKitab()
    {
        return $this->belongsTo(StatusKitab::class, 'id_status_kitabs');
    }

    // Relasi ke LatinArabs
    public function latinArabs()
    {
        return $this->belongsTo(LatinArabs::class, 'id_latin_arabs');
    }
}
