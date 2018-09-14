<?php

use Illuminate\Database\Seeder;
use Populasi\Models\FaseSapi;

class FaseSapiTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = [
            [
                'id' => 1,
                'nama' => 'Pedet Jantan',
                'Deskripsi' => 'Pedet jantan usia 0 - 6 bulan'
            ],
            [
                'id' => 2,
                'nama' => 'Pedet Jantan 6+',
                'Deskripsi' => 'Pedet jantan usia 6 - 18 bulan'
            ],
            [
                'id' => 3,
                'nama' => 'Pedet Betina',
                'Deskripsi' => 'Pedet betina usia 0 - 6 bulan'
            ],
            [
                'id' => 4,
                'nama' => 'Pedet Betina 6+',
                'Deskripsi' => 'Pedet betina usia 6 - 18 bulan'
            ],
            [
                'id' => 5,
                'nama' => 'Dara Bunting',
                'Deskripsi' => 'Betina remaja bunting'
            ],
            [
                'id' => 6,
                'nama' => 'Dara Tdk Bunting',
                'Deskripsi' => 'Betina remaja tidak bunting'
            ],
            [
                'id' => 7,
                'nama' => 'Laktasi Bunting',
                'Deskripsi' => 'Betina induk laktasi bunting'
            ],
            [
                'id' => 8,
                'nama' => 'Laktasi Tdk Bunting',
                'Deskripsi' => 'Betina induk laktasi tidak bunting'
            ],
            [
                'id' => 9,
                'nama' => 'Kering Bunting',
                'Deskripsi' => 'Betina induk kering bunting'
            ],
            [
                'id' => 10,
                'nama' => 'Kering Tdk Bunting',
                'Deskripsi' => 'Betina induk kering tidak bunting'
            ],
            [
                'id' => 11,
                'nama' => 'Jantan Muda',
                'Deskripsi' => 'Jantan remaja'
            ],
            [
                'id' => 12,
                'nama' => 'Jantan Dewasa',
                'Deskripsi' => 'Jantan Dewasa'
            ],
        ];

        foreach ($f as $key => $value) {
            FaseSapi::create($value);
        }
    }
}
