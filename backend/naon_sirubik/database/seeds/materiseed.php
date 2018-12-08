<?php

use Illuminate\Database\Seeder;
use App\Materi;

class materiseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = ['matematika', 'bahasa_inggris', 'ipa', 'ips'];
        
        for ($kelas=1; $kelas <= 6; $kelas++) { 
            foreach ($mapel as $mp) {
                $tgl = 7;
                
                Materi::Insert(
                    [
                        [
                            'id_uploader'=> rand(1, 3),
                            'mata_pelajaran'=> $mp,
                            'kelas' => $kelas,
                            'deskripsi' => 'lorem ipsum',
                            'file_materi' => 'hehe.pdf',
                
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s')        
                        ]
                    ]
                );
                }
            }
        }

    
}
