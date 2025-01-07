<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePohonTable extends Migration
{
    public function up()
    {
        Schema::create('pohon', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc')->nullable();
            $table->string('gambar')->nullable();
            $table->integer('stock')->default(0);
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pohon');
    }
}
