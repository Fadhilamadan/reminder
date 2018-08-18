<?php

use Illuminate\Database\Seeder;

class TugasAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tugas_akhir=[ ['id'=>'1',
                        'title'=>'Pembuatan Game Android',
                        'isActive'=>'1',
                        'dosen_satu_id'=>'1',
                        'dosen_dua_id'=>'3',
                        'mahasiswa_id'=>'1',
                        'periode_id'=>'4'],

        	           ['id'=>'2',
                       'title'=>'Pembuatan Website Ubaya',
                       'isActive'=>'1',
                       'dosen_satu_id'=>'1',
                       'dosen_dua_id'=>'4',
                       'mahasiswa_id'=>'2',
                       'periode_id'=>'4'],

        	           ['id'=>'3',
                       'title'=>'Pembuatan Game Logo Kuis',
                       'isActive'=>'1',
                       'dosen_satu_id'=>'6',
                       'dosen_dua_id'=>'5',
                       'mahasiswa_id'=>'3',
                       'periode_id'=>'5'],

        	           ['id'=>'4',
                       'title'=>'Pembuatan Website Ormawa',
                       'isActive'=>'1',
                       'dosen_satu_id'=>'11',
                       'dosen_dua_id'=>'3',
                       'mahasiswa_id'=>'4',
                       'periode_id'=>'6'],

                       ['id'=>'5',
                       'title'=>'Pembuatan Website Fakultas',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'17',
                       'dosen_dua_id'=>'4',
                       'mahasiswa_id'=>'5',
                       'periode_id'=>'4'],
                       ['id'=>'6',
                       'title'=>'Pembuatan Website Pemesanan Konsumsi Rapat',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'19',
                       'dosen_dua_id'=>'20',
                       'mahasiswa_id'=>'7',
                       'periode_id'=>'7'],
                       ['id'=>'7',
                       'title'=>'Pembuatan Website E-Commerce',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'16',
                       'dosen_dua_id'=>'7',
                       'mahasiswa_id'=>'8',
                       'periode_id'=>'4'],
                       ['id'=>'8',
                       'title'=>'Pembuatan Sistem Kasir Waralaba',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'3',
                       'dosen_dua_id'=>'19',
                       'mahasiswa_id'=>'9',
                       'periode_id'=>'4'],
                       ['id'=>'9',
                       'title'=>'Pembuatan Game Java Basis Web',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'8',
                       'dosen_dua_id'=>'5',
                       'mahasiswa_id'=>'19',
                       'periode_id'=>'5'],
                       ['id'=>'10',
                       'title'=>'Pembuatan Sistem Perbankan',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'4',
                       'dosen_dua_id'=>'12',
                       'mahasiswa_id'=>'17',
                       'periode_id'=>'5'],
                       ['id'=>'11',
                       'title'=>'Pembuatan Anti Virus',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'6',
                       'dosen_dua_id'=>'19',
                       'mahasiswa_id'=>'14',
                       'periode_id'=>'6'],
                       ['id'=>'12',
                       'title'=>'Pembuatan Sistem Keamanan Cloud Computing',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'20',
                       'dosen_dua_id'=>'6',
                       'mahasiswa_id'=>'15',
                       'periode_id'=>'6'],
                       ['id'=>'13',
                       'title'=>'Pembuatan Aplikasi Pintar',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'18',
                       'dosen_dua_id'=>'16',
                       'mahasiswa_id'=>'13',
                       'periode_id'=>'7'],
                       ['id'=>'14',
                       'title'=>'Pembuatan Sistem Operasi Linux Terbaru',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'15',
                       'dosen_dua_id'=>'7',
                       'mahasiswa_id'=>'12',
                       'periode_id'=>'7'],
                       ['id'=>'15',
                       'title'=>'Pembuatan Simulasi Pesawat ',
                       'isActive'=>'0',
                       'dosen_satu_id'=>'19',
                       'dosen_dua_id'=>'11',
                       'mahasiswa_id'=>'16',
                       'periode_id'=>'6'],

        ];
        DB::table('tugas_akhir')->insert($tugas_akhir);
    }
}
