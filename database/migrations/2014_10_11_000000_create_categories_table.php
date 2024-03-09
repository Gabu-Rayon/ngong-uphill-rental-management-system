<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->timestamps();
        });

        // Insert data into the 'categories' table
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Duplex'],
            ['id' => 2, 'name' => 'Single-Family Home'],
            ['id' => 3, 'name' => 'Multi-Family Home'],
            ['id' => 4, 'name' => '2-story house'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}