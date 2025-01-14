<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIslamiKitabsTable extends Migration
{
    public function up()
    {
        Schema::create('islami_kitabs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_id_nk');
            $table->string('name_kitabs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('islami_kitabs');
    }
}
