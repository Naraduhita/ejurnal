<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "brigita",
				"role" => "author",
				"password" => password_hash("704600", PASSWORD_DEFAULT)
			],
			[
                "name" => "nara",
				"role" => "editor",
				"password" => password_hash("704600", PASSWORD_DEFAULT)
            ],
            [
                "name" => "duhita",
				"role" => "reviewer",
				"password" => password_hash("704600", PASSWORD_DEFAULT)
            ]
		]);
    }
}
