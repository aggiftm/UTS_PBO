<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sejarah = Category::firstOrCreate([
            'name' => 'SD',
            'type' => 'Kelas',
        ]);
        Kelas::firstOrCreate([
            'category_id' => $sejarah->id,
            'namaKelas' => '6A',
        ]);
    }
}
