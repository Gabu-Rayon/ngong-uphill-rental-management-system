<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('email', 200);
            $table->string('contact', 20);
            $table->text('cover_img');
            $table->text('about_content');
            $table->timestamps();
        });

        // Insert data into the 'system_settings' table
        DB::table('system_settings')->insert([
            'id' => 1,
            'name' => 'House Rental Management System',
            'email' => 'info@sample.comm',
            'contact' => '+6948 8542 623',
            'cover_img' => '1603344720_1602738120_pngtree-purple-hd-business-banner-image_5493.jpg',
            'about_content' => '<p style="text-align: center; background: transparent; position: relative;"><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-weight: 400; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p><p style="text-align: center; background: transparent; position: relative;"><br></p><p style="text-align: center; background: transparent; position: relative;"><br></p><p></p>',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_settings');
    }
}