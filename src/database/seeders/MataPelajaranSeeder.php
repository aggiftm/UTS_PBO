<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\MataPelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sejarah = Category::firstOrCreate([
            'name' => 'Sejarah',
            'type' => 'MataPelajaran',
        ]);
        MataPelajaran::firstOrCreate([
            'category_id' => $sejarah->id,
            'namaPelajaran' => 'Sejarah Indonesia',
            'namaGuru' => 'Romantika Kehidupan',
        ]);
    }
}
