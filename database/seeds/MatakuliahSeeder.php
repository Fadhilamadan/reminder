<?php

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $matakuliah=[ ['id'=>'1',
                       'id_matakuliah'=>'1604A021',
                       'name'=>'Pemrograman Berorientasi Obyek',
                       'isActive'=>'0'],
        	           ['id'=>'2',
                       'id_matakuliah'=>'19022',
                       'name'=>'Data Mining',
                       'isActive'=>'1'],
                     ['id'=>'3',
                       'id_matakuliah'=>'1604A051',
                       'name'=>'Pemrograman Terdistribusi',
                       'isActive'=>'1'],
                     ['id'=>'4',
                       'id_matakuliah'=>'1604A022',
                       'name'=>'Sistem Operasi',
                       'isActive'=>'1'],
                     ['id'=>'5',
                       'id_matakuliah'=>'1604A072',
                       'name'=>'Pemodelan dan Simulasi',
                       'isActive'=>'0'],
                     ['id'=>'6',
                       'id_matakuliah'=>'1604A055',
                       'name'=>'Statistika',
                       'isActive'=>'1'],
                     ['id'=>'7',
                       'id_matakuliah'=>'1607A021',
                       'name'=>'Basis Data',
                       'isActive'=>'0'],
                     ['id'=>'8',
                       'id_matakuliah'=>'1604A052',
                       'name'=>'Information Security and Asurance',
                       'isActive'=>'1'],
                     ['id'=>'9',
                       'id_matakuliah'=>'1600A003',
                       'name'=>'Kewirausahaan dan Inovasi',
                       'isActive'=>'1'],
                     ['id'=>'10',
                       'id_matakuliah'=>'1604A054',
                       'name'=>'Desain dan Implementasi Sistem (RPL 2)',
                       'isActive'=>'1'],
                     ['id'=>'11',
                       'id_matakuliah'=>'1607A052',
                       'name'=>'System Testing & Implementasi',
                       'isActive'=>'0'],
                     ['id'=>'12',
                       'id_matakuliah'=>'1604A061',
                       'name'=>'Pemrograman Nirkabel',
                       'isActive'=>'1'],
                     ['id'=>'13',
                       'id_matakuliah'=>'1604A054',
                       'name'=>'Manajemen Teknologi Telematika',
                       'isActive'=>'1'],
                     ['id'=>'14',
                       'id_matakuliah'=>'1604A011',
                       'name'=>'Algoritma dan Pemrograman',
                       'isActive'=>'1'],
                     ['id'=>'15',
                       'id_matakuliah'=>'1604A041',
                       'name'=>'Teknologi Multimedia',
                       'isActive'=>'1']
        ];
        DB::table('matakuliah')->insert($matakuliah);
    }
}
