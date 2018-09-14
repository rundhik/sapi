<?php

use Populasi\Models\Kelompok;
use Illuminate\Database\Seeder;

class KelompokTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $z = [
            [
                'id' => 1,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Wonosari)',
                'wilayah_id' => 1,
            ],
            [
                'id' => 2,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Wonosari)',
                'wilayah_id' => 1,
            ],
            [
                'id' => 3,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Wonosari)',
                'wilayah_id' => 1,
            ],
            [
                'id' => 4,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Wonosari)',
                'wilayah_id' => 1,
            ],
            [
                'id' => 5,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Gendro)',
                'wilayah_id' => 2,
            ],
            [
                'id' => 6,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Gendro)',
                'wilayah_id' => 2,
            ],
            [
                'id' => 7,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Gendro)',
                'wilayah_id' => 2,
            ],
            [
                'id' => 8,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Gendro)',
                'wilayah_id' => 2,
            ],
            [
                'id' => 9,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Gendro)',
                'wilayah_id' => 2,
            ],
            [
                'id' => 10,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Gendro)',
                'wilayah_id' => 2,
            ],
            [
                'id' => 11,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 12,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 13,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 14,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 15,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 16,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 17,
                'nama_kelompok' => 'Kelompok 7',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 18,
                'nama_kelompok' => 'Kelompok 8',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 19,
                'nama_kelompok' => 'Kelompok 9',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 20,
                'nama_kelompok' => 'Kelompok 10',
                'deskripsi' => '(Desa Tlogosari)',
                'wilayah_id' => 3,
            ],
            [
                'id' => 21,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Blarang)',
                'wilayah_id' => 4,
            ],
            [
                'id' => 22,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Blarang)',
                'wilayah_id' => 4,
            ],
            [
                'id' => 23,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Blarang)',
                'wilayah_id' => 4,
            ],
            [
                'id' => 24,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Blarang)',
                'wilayah_id' => 4,
            ],
            [
                'id' => 25,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Blarang)',
                'wilayah_id' => 4,
            ],
            [
                'id' => 26,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Blarang)',
                'wilayah_id' => 4,
            ],
            [
                'id' => 27,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Kayukebek)',
                'wilayah_id' => 5,
            ],
            [
                'id' => 28,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Kayukebek)',
                'wilayah_id' => 5,
            ],
            [
                'id' => 29,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Kayukebek)',
                'wilayah_id' => 5,
            ],
            [
                'id' => 30,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 31,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 32,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 33,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 34,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 35,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 36,
                'nama_kelompok' => 'Kelompok 7',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 37,
                'nama_kelompok' => 'Kelompok 8',
                'deskripsi' => '(Desa Andonosari)',
                'wilayah_id' => 6,
            ],
            [
                'id' => 38,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Pungging)',
                'wilayah_id' => 7,
            ],
            [
                'id' => 39,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Pungging)',
                'wilayah_id' => 7,
            ],
            [
                'id' => 40,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Pungging)',
                'wilayah_id' => 7,
            ],
            [
                'id' => 41,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Pungging)',
                'wilayah_id' => 7,
            ],
            [
                'id' => 42,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 43,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 44,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 45,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 46,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 47,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 48,
                'nama_kelompok' => 'Kelompok 7',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 49,
                'nama_kelompok' => 'Kelompok 8',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 50,
                'nama_kelompok' => 'Kelompok 9',
                'deskripsi' => '(Desa Tutur)',
                'wilayah_id' => 8,
            ],
            [
                'id' => 51,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 52,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 53,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 54,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 55,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 56,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 57,
                'nama_kelompok' => 'Kelompok 7',
                'deskripsi' => '(Desa Kalipucang)',
                'wilayah_id' => 9,
            ],
            [
                'id' => 58,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Sumberpitu)',
                'wilayah_id' => 10,
            ],
            [
                'id' => 59,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Sumberpitu)',
                'wilayah_id' => 10,
            ],
            [
                'id' => 60,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Sumberpitu)',
                'wilayah_id' => 10,
            ],
            [
                'id' => 61,
                'nama_kelompok' => 'Kelompok 4',
                'deskripsi' => '(Desa Sumberpitu)',
                'wilayah_id' => 10,
            ],
            [
                'id' => 62,
                'nama_kelompok' => 'Kelompok 5',
                'deskripsi' => '(Desa Sumberpitu)',
                'wilayah_id' => 10,
            ],
            [
                'id' => 63,
                'nama_kelompok' => 'Kelompok 6',
                'deskripsi' => '(Desa Ngembal)',
                'wilayah_id' => 11,
            ],
            [
                'id' => 64,
                'nama_kelompok' => 'Kelompok 7',
                'deskripsi' => '(Desa Ngembal)',
                'wilayah_id' => 11,
            ],
            [
                'id' => 65,
                'nama_kelompok' => 'Kelompok 8',
                'deskripsi' => '(Desa Ngembal)',
                'wilayah_id' => 11,
            ],
            [
                'id' => 66,
                'nama_kelompok' => 'Kelompok 1',
                'deskripsi' => '(Desa Tempuran)',
                'wilayah_id' => 12,
            ],
            [
                'id' => 67,
                'nama_kelompok' => 'Kelompok 2',
                'deskripsi' => '(Desa Tempuran)',
                'wilayah_id' => 12,
            ],
            [
                'id' => 68,
                'nama_kelompok' => 'Kelompok 3',
                'deskripsi' => '(Desa Tempuran)',
                'wilayah_id' => 12,
            ],
        ];
        foreach ($z as $key => $value) {
            Kelompok::create($value);
        }
    }
}
