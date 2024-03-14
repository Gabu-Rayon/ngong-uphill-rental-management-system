<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('username', 100);
            $table->string('email', 255);
            $table->string('contact', 100);
            $table->string('town', 100);
            $table->string('password', 255);
            $table->unsignedBigInteger('house_id')->onDelete('cascade')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 = active, 0 = inactive');
            $table->date('date_in')->nullable();
            $table->timestamps();

            // Foreign key relationship with the 'houses' table
            $table->foreign('house_id')->references('id')->on('houses');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}