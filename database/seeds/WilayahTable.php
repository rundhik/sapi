<?php

use Populasi\Models\Wilayah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = [
            [
                'id' => 1,
                'nama_wilayah' => 'Wonosari',
                'deskripsi' => 'Wilayah 1',
            ],
            [
                'id' => 2,
                'nama_wilayah' => 'Gendro',
                'deskripsi' => 'Wilayah 2',
            ],
            [
                'id' => 3,
                'nama_wilayah' => 'Tlogosari',
                'deskripsi' => 'Wilayah 3',
            ],
            [
                'id' => 4,
                'nama_wilayah' => 'Blarang',
                'deskripsi' => 'Wilayah 4',
            ],
            [
                'id' => 5,
                'nama_wilayah' => 'Kayukebek',
                'deskripsi' => 'Wilayah 5',
            ],
            [
                'id' => 6,
                'nama_wilayah' => 'Andonosari',
                'deskripsi' => 'Wilayah 6',
            ],
            [
                'id' => 7,
                'nama_wilayah' => 'Pungging',
                'deskripsi' => 'Wilayah 7',
            ],
            [
                'id' => 8,
                'nama_wilayah' => 'Tutur',
                'deskripsi' => 'Wilayah 8',
            ],
            [
                'id' => 9,
                'nama_wilayah' => 'Kalipucang',
                'deskripsi' => 'Wilayah 9',
            ],
            [
                'id' => 10,
                'nama_wilayah' => 'Sumberpitu',
                'deskripsi' => 'Wilayah 10',
            ],
            [
                'id' => 11,
                'nama_wilayah' => 'Ngembal',
                'deskripsi' => 'Wilayah 11',
            ],
            [
                'id' => 12,
                'nama_wilayah' => 'Tempuran',
                'deskripsi' => 'Wilayah 12',
            ]
        ];
    
        foreach ($x as $key => $value) {
            Wilayah::create($value);
        }
    }
}
