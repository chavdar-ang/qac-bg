<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Chavdar Angelov',
                'email' => 'chavdar84@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('miki_mouse')
            ],
            [
                'name' => 'Peter Petrov',
                'email' => 'petar.emilov.petrov@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('fuckgoogle$')
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
