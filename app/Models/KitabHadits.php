<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitabHadits extends Model
{
    use HasFactory;

    protected $table = 'kitab_hadits';

    protected $fillable = [
        'deksripsi_hadits',
    ];

    public function contentKitabs()
    {
        return $this->hasMany(ContentKitab::class, 'id_kitab_hadits');
    }
}
