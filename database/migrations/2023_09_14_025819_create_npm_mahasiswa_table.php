<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpmMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('npm_mahasiswa', function (Blueprint $table) {
            $table->string('npm', 50)->primary();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('npm_mahasiswa');
    }
}
