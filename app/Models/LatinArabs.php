<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatinArabs extends Model
{
    use HasFactory;

    protected $table = 'latin_arabs';

    protected $fillable = [
        'id',
        'content_latin',
        'content_arab',
    ];

    public function contentKitabs()
    {
        return $this->hasMany(ContentKitab::class, 'id_latin_arabs');
    }
}
