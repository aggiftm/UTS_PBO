<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'category_id',
        'namaKelas',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}