<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        User::create([
            'first_name'        => 'Alexandr',
            'last_name'         => 'Seleznyov',
            'email'             => 'seleznyov_ae@ukr.net',
            'password'          => bcrypt('MishinA'),
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        // User::create([
        //     'first_name'        => 'Backend',
        //     'last_name'         => 'User',
        //     'email'             => 'executive@executive.com',
        //     'password'          => bcrypt('1234'),
        //     'confirmation_code' => md5(uniqid(mt_rand(), true)),
        //     'confirmed'         => true,
        // ]);

        // User::create([
        //     'first_name'        => 'Default',
        //     'last_name'         => 'User',
        //     'email'             => 'user@user.com',
        //     'password'          => bcrypt('1234'),
        //     'confirmation_code' => md5(uniqid(mt_rand(), true)),
        //     'confirmed'         => true,
        // ]);

        $this->enableForeignKeys();
    }
}
