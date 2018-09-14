<?php

use Illuminate\Database\Seeder;
use Populasi\Models\TipeSapi;

class TipeSapiTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t = [
            [
                'id' => 1,
                'nama' => 'Lokal',
                'deskripsi' => 'Sapi milik sendiri / lokal',
            ],
            [
                'id' => 2,
                'nama' => 'Gaduan',
                'deskripsi' => 'Sapi gaduan (Koperasi)',
            ],
            [
                'id' => 3,
                'nama' => 'Guliran',
                'deskripsi' => 'Sapi guliran (Koperasi',
            ],
            [
                'id' => 4,
                'nama' => 'Lain-lain',
                'deskripsi' => 'Sapi rumatan orang lain',
            ],
        ];

        foreach ($t as $key => $value) {
            TipeSapi::create($value);
        }
    }
}
