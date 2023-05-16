<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->text("desctiption");
            $table->string("thumb");
            $table->string("price");
            $table->string("series");
            $table->date("sale_date");
            $table->string("type");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comics');
    }
};


// "title" => "Action Comics #1000: The Deluxe Edition",
// "description" => "Tories Action Comics #1 and 2 from 1938!",
// "thumb" => "https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=250",
// "price" => "$19.99",
// "series" => "Action Comics",
// "sale_date" => "2018-10-02",
// "type" => "comic book",