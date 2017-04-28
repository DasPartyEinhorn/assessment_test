<?php
/**
 * Created by PhpStorm.
 * User: Simon Hansen
 * Date: 28.04.2017
 * Time: 10:38
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
             'username' => 'Torvalds',
             'password' => 'p3ngu1n'
         ]);
        User::create([
            'username' => 'Simon',
            'password' => 'passwort'
        ]);
    }
}