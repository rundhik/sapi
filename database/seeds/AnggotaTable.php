<?php

use Illuminate\Database\Seeder;
use Populasi\Models\Anggota;

class AnggotaTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $a = [
            [
                'no_anggota' => 169,
                'nama' => 'KAMSIN',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1954-06-30',
                'dusun' => 'NGADIPURO',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 1,
                'no_registrasi' => '01.01.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 199,
                'nama' => 'SANDI',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1960-08-11',
                'dusun' => 'NGADIPURO',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 1,
                'no_registrasi' => '01.01.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 10,
                'nama' => 'UNTUNG',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1954-06-30',
                'dusun' => 'KARANG ANYAR',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 2,
                'no_registrasi' => '01.02.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 10,
                'nama' => 'RIYADIN',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1956-10-06',
                'dusun' => 'KARANG ANYAR',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 2,
                'no_registrasi' => '01.02.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 17,
                'nama' => 'MARKASAN',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1950-06-30',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 3,
                'no_registrasi' => '01.03.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 36,
                'nama' => 'SAKIR',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1950-05-20',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 3,
                'no_registrasi' => '01.03.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 43,
                'nama' => 'KUSMANADI',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1957-06-30',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 4,
                'no_registrasi' => '01.04.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 77,
                'nama' => 'H. M. SUPRAPTO',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1948-02-17',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 4,
                'no_registrasi' => '01.04.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 36,
                'nama' => 'SAKIR',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1950-05-20',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 3,
                'no_registrasi' => '01.03.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 43,
                'nama' => 'KUSMANADI',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1957-06-30',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 4,
                'no_registrasi' => '01.04.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 77,
                'nama' => 'H. M. SUPRAPTO',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1948-02-17',
                'dusun' => 'WONOSARI BARAT',
                'desa' => 'WONOSARI',
                'wilayah_id' => 1,
                'kelompok_id' => 4,
                'no_registrasi' => '01.04.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 18,
                'nama' => 'KASAN',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1948-08-23',
                'dusun' => 'GERDU',
                'desa' => 'GENDRO',
                'wilayah_id' => 2,
                'kelompok_id' => 5,
                'no_registrasi' => '01.04.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
            [
                'no_anggota' => 53,
                'nama' => 'JAMIAN',
                'jenis_kelamin' => 0, //0 Laki-laki , 1 Perempuan
                'tempat_lahir' => 'PASURUAN',
                'tanggal_lahir' => '1944-08-23',
                'dusun' => 'GERDU',
                'desa' => 'GENDRO',
                'wilayah_id' => 2,
                'kelompok_id' => 5,
                'no_registrasi' => '01.04.SK.IV.2013',
                'status' => 1, //1 aktif , 0 nonaktif
            ],
        ];

        foreach ($a as $key => $value) {
            Anggota::create($value);
        }
    }
}
