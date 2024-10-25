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

        
        Merk::create(['nama_merk' => 'Samsung','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Xiaomi','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Oppo','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Vivo','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Realme','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Apple','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Asus','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Huawei','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Nokia','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Infinix','jenis'=>'smartphone']);
        Merk::create(['nama_merk' => 'Lenovo', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'HP', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Acer', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Dell', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Asus', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Apple', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'MSI', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Razer', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Toshiba', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'Samsung', 'jenis' => 'laptop']);
Merk::create(['nama_merk' => 'HP', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Dell', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Acer', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Lenovo', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Asus', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Apple', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'MSI', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Gigabyte', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'Razer', 'jenis' => 'computer']);
Merk::create(['nama_merk' => 'ZOTAC', 'jenis' => 'computer']);

        mitra::create(['name' => 'Recycle Center Pontianak Barat',
                    'latitude'=>'-0.05670000',
                    'longitude'=>'109.3447400',
                    'address'=>'Jalan Ahmad Yani No.12, Pontianak Barat',
                    'phone'=>'081234567890',
                    'time'=>'8:00 AM - 8:00 PM']);
        mitra::create(['name' => 'Green Waste Pontianak Utara',
                    'latitude'=>'-0.03888000',
                    'longitude'=>'109.37348000',
                    'address'=>'Jalan Gajah Mada No.34, Pontianak Utara',
                    'phone'=>'082345678901',
                    'time'=>'9:00 AM - 6:00 PM']);
        mitra::create(['name' => 'Eco Ponti',
                    'latitude'=>'-0.06250000',
                    'longitude'=>'109.32164000',
                    'address'=>'Jalan Tanjungpura No.56, Pontianak Selatan',
                    'phone'=>'083456789012',
                    'time'=>'8:30 AM - 7:00 PM']);
        mitra::create(['name' => 'Sustainable Waste Pontianak',
                    'latitude'=>'-0.04134000',
                    'longitude'=>'109.40578000',
                    'address'=>'Jalan Veteran No.78, Pontianak Timur',
                    'phone'=>'084567890123',
                    'time'=>'7:45 AM - 5:30 PM']);
        mitra::create(['name' => 'Recycle Hub Pontianak Kota',
                    'latitude'=>'-0.04921000',
                    'longitude'=>'109.34578000',
                    'address'=>'Jalan Imam Bonjol No.90, Pontianak Kota',
                    'phone'=>'085678901234',
                    'time'=>'10:00 AM - 9:00 PM']);
    }
}
