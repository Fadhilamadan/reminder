<?php

use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $periode=[ ['id'=>'1',
                        'nama_periode'=>'SEMESTER GENAP 2016-2017',
                        'date_start'=>'2017-02-09',
                        'date_end'=>'2017-02-22', 
                        'isActive'=>0], 
                    ['id'=>'2',
                        'nama_periode'=>'SEMESTER GENAP 2016-2017',
                        'date_start'=>'2017-03-01',
                        'date_end'=>'2017-03-15', 
                        'isActive'=>0],
                    ['id'=>'3',
                        'nama_periode'=>'SEMESTER GENAP 2016-2017',
                        'date_start'=>'2017-04-15',
                        'date_end'=>'2017-04-29', 
                        'isActive'=>0],
                    ['id'=>'4',
                        'nama_periode'=>'SEMESTER GENAP 2016-2017',
                        'date_start'=>'2017-05-02',
                        'date_end'=>'2017-05-18', 
                        'isActive'=>1],
                    ['id'=>'5',
                        'nama_periode'=>'SEMESTER GENAP 2016-2017',
                        'date_start'=>'2017-06-09',
                        'date_end'=>'2017-06-19', 
                        'isActive'=>1],             
        	       ['id'=>'6',
                       'nama_periode'=>'SEMESTER GANJIL 2016-2017',
                       'date_start'=>'2017-08-10',
                       'date_end'=>'2017-08-24', 
                       'isActive'=>1],
                   ['id'=>'7',
                       'nama_periode'=>'SEMESTER GANJIL 2016-2017',
                       'date_start'=>'2017-09-01',
                       'date_end'=>'2017-09-16', 
                       'isActive'=>1],
                    ['id'=>'8',
                       'nama_periode'=>'SEMESTER GANJIL 2016-2017',
                       'date_start'=>'2017-10-01',
                       'date_end'=>'2017-10-20', 
                       'isActive'=>0],
                    ['id'=>'9',
                       'nama_periode'=>'SEMESTER GANJIL 2016-2017',
                       'date_start'=>'2017-11-05',
                       'date_end'=>'2017-11-18', 
                       'isActive'=>0]                 
                    
        ];
        DB::table('periode')->insert($periode);
    }
}
