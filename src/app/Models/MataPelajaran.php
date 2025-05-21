<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajarans';
    protected $fillable = [
        'category_id',
        'mataPelajaran',
        'namaGuru',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}