<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKitabsTable extends Migration
{
    public function up()
    {
        Schema::create('detail_kitabs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_id');
            $table->string('rujukan');
            $table->string('halaman');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_kitabs');
    }
}
