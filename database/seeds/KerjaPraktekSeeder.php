<?php

use Illuminate\Database\Seeder;

class KerjaPraktekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kerja_praktek=[ ['id'=>'1',
                            'title'=>'Pembuatan Game Android',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'2',
                            'mahasiswa_dua_id'=>'1',
                            'dosen_pembimbing_id'=>'1', 
                            'periode_id'=>'4'],
                        ['id'=>'2',
                            'title'=>'Pembuatan Pendaftaran LSTA',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'3',
                            'mahasiswa_dua_id'=>'4',
                            'dosen_pembimbing_id'=>'3', 
                            'periode_id'=>'5'],
                        ['id'=>'3',
                            'title'=>'Pembuatan Game RPG',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'5',
                            'mahasiswa_dua_id'=>'6',
                            'dosen_pembimbing_id'=>'7', 
                            'periode_id'=>'4'],
                        ['id'=>'4',
                            'title'=>'Pembuatan Sistem Kasir',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'12',
                            'mahasiswa_dua_id'=>'8',
                            'dosen_pembimbing_id'=>'6', 
                            'periode_id'=>'6'],
                        ['id'=>'5',
                            'title'=>'Pembuatan Sistem Antrian Layanan',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'7',
                            'mahasiswa_dua_id'=>'9',
                            'dosen_pembimbing_id'=>'8', 
                            'periode_id'=>'6'],
                        ['id'=>'6',
                            'title'=>'Pembuatan Sistem Penjadwalan Karyawan',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'13',
                            'mahasiswa_dua_id'=>'15',
                            'dosen_pembimbing_id'=>'10', 
                            'periode_id'=>'4'],
                        ['id'=>'7',
                            'title'=>'Pembuatan Sistem Pemesanan Makanan',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'14',
                            'mahasiswa_dua_id'=>'16',
                            'dosen_pembimbing_id'=>'12', 
                            'periode_id'=>'7'],
                        ['id'=>'8',
                            'title'=>'Pembuatan Sistem Peminjaman Ruangan Aula',
                            'isActive'=>'1',
                            'mahasiswa_satu_id'=>'17',
                            'mahasiswa_dua_id'=>'19',
                            'dosen_pembimbing_id'=>'17', 
                            'periode_id'=>'5']                      

        ];
        DB::table('kerja_praktek')->insert($kerja_praktek);
    }
}
