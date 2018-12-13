<?php

use Illuminate\Database\Seeder;
use App\Jadwal;

class jadwal2seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
            $mapel = ['Matematika', 'Bahasa Inggris', 'IPA', 'IPS'];
            $relawan = 3;
            

            for ($i=0; $i < $relawan; $i++) { 
                
                $tgl = 14;
                    foreach ($mapel as $mp) {            
                    Jadwal::Insert(
                        [
                            [
                                'mata_pelajaran'=> $mp,
                                'id_relawan'=>strval($i),
                                'tempat' => 'bogor',
                                'deskripsi' => 'lorem ipsum',
                                'waktu' => '2018-12-'.strval($tgl).' 1:1:1',                                
                                'kelas' => rand(1, 6),
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s')

                            ]
                        ]
                    );
                    $tgl = $tgl + 3;
                }
            }
    }
}
