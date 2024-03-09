<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name',200);
            $table->string('username', 200);
            $table->string('password', 255);
            $table->tinyInteger('type')->default(2)->comment('1=Admin,2=Staff');
            $table->timestamps();
        });

        // Insert data into the 'users' table
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => bcrypt('your_admin_password'),
            'type' => 1,
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