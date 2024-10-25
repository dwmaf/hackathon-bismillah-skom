<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Merk;
use App\Models\mitra;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        Merk::create(['nama_merk' => 'Samsung']);
        Merk::create(['nama_merk' => 'Xiaomi']);
        Merk::create(['nama_merk' => 'Oppo']);
        Merk::create(['nama_merk' => 'Vivo']);
        Merk::create(['nama_merk' => 'Realme']);
        Merk::create(['nama_merk' => 'Apple']);
        Merk::create(['nama_merk' => 'Asus']);
        Merk::create(['nama_merk' => 'Huawei']);
        Merk::create(['nama_merk' => 'Nokia']);
        Merk::create(['nama_merk' => 'Infinix']);

        mitra::create(['name' => 'Recycle Center Pontianak Barat',
                    'latitude'=>'-0.05670000']);
    }
}
