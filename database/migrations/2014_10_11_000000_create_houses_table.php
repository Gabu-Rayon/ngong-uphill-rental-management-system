<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('house_no', 50);
            $table->unsignedBigInteger('category_id')->onDelete('cascade');
            $table->text('description');
            $table->double('price');
            $table->timestamps();

            // Foreign key relationship with the 'categories' table
            $table->foreign('category_id')->references('id')->on('categories');
        });

        // Insert data into the 'houses' table
        DB::table('houses')->insert([
            ['id' => 1, 'house_no' => '623', 'category_id' => 4, 'description' => 'Sample', 'price' => 2500],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}