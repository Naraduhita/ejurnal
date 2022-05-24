<?php namespace App\Database\Seeds;
  
class AuthorSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'  => 'Bagus',
                'nama_tengah'  =>  'Purnama',
                'nama_akhir'  =>  '',
                'email'  =>  'baguspurnama@gmail.com',
                'url'  =>  'www.',
                'bidang'  =>  'Computer Science',
                'negara'  =>  'Indonesia',
                'bio'  =>  'test'

            ],
            // [
            //     'nama'  => 'Bagus',
            //     'nama_tengah'  =>  'Purnama',
            //     'nama_akhir'  =>  '',
            //     'email'  =>  'baguspurnama@gmail.com',
            //     'url'  =>  'www.',
            //     'bidang'  =>  'Computer Science',
            //     'negara'  =>  'Indonesia',
            //     'bio'  =>  'test'

            // ]
         
        ];
        $this->db->table('author')->insertBatch($data);
    }
} 