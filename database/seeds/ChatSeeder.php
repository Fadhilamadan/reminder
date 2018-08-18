<?php

use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $chat=[ ['id'=>'1',
                 'content'=>'chat',
                 'date'=>'2017-05-15',
                 'from'=>'Robby Ongko Wijoyo',
                 'isRead'=>'1',
                 'isActive'=>'1',
                 'mahasiswa_id'=>'2',
                 'dosen_id'=>'1'],

        	   ['id'=>'2',
                'content'=>'chat',
                'date'=>'2017-05-19',
                'from'=>'Evin Cintiawan',
                 'isRead'=>'1',
                'isActive'=>'1',
                'mahasiswa_id'=>'1',
                'dosen_id'=>'1'],

        	   ['id'=>'3',
                'content'=>'chat',
                'date'=>'2017-06-12',
                'from'=>'Rama Adhiguna',
                 'isRead'=>'1',
                'isActive'=>'0',
                'mahasiswa_id'=>'1',
                'dosen_id'=>'1'],

        	   ['id'=>'4',
               'content'=>'chat',
               'date'=>'2017-07-11',
               'from'=>'Lucas Leonard',
                 'isRead'=>'1',
               'isActive'=>'0',
               'mahasiswa_id'=>'4',
               'dosen_id'=>'2'],

        	   ['id'=>'5',
               'content'=>'chat',
               'date'=>'2017-05-09',
               'from'=>'Sonny Haryadi',
                 'isRead'=>'1',
               'isActive'=>'0',
               'mahasiswa_id'=>'6',
               'dosen_id'=>'2'],

        	   ['id'=>'6',
                'content'=>'chat',
                'date'=>'2017-05-08',
                'from'=>'Kevin Andryano',
                 'isRead'=>'1',
                'isActive'=>'0',
                'mahasiswa_id'=>'7',
                'dosen_id'=>'2'],
            ['id'=>'7',
                'content'=>'chat',
                'date'=>'2017-05-22',
                'from'=>'Billie Arianto',
                 'isRead'=>'1',
                'isActive'=>'0',
                'mahasiswa_id'=>'5',
                'dosen_id'=>'2'],
            ['id'=>'8',
                'content'=>'chat',
                'date'=>'2017-05-22',
                'from'=>'Putu Aditya Riva',
                 'isRead'=>'1',
                'isActive'=>'0',
                'mahasiswa_id'=>'9',
                'dosen_id'=>'2'],
            ['id'=>'9',
                'content'=>'chat',
                'date'=>'2017-05-22',
                'from'=>'Fadhil Amadan',
                 'isRead'=>'1',
                'isActive'=>'0',
                'mahasiswa_id'=>'10',
                'dosen_id'=>'2'],
            ['id'=>'10',
                'content'=>'chat',
                'date'=>'2017-05-22',
                'from'=>'Faishal Hendaryawan',
                 'isRead'=>'1',
                'isActive'=>'0',
                'mahasiswa_id'=>'8',
                'dosen_id'=>'2']
        ];

        DB::table('chat')->insert($chat);
    }
}
