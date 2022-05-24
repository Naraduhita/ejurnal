<?php namespace App\Database\Seeds;
  
class DataSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('AuthorSeeder');
        $this->call('ArticleSeeder');
        // $this->call('UserSeeder');
    }
} 

// Run : php spark db:seed DataSeeder