<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mp3_url')->nullable();
            $table->string('agreement_url')->nullable();
            $table->string('length')->nullable();
            $table->boolean('is_live')->default(0);
            $table->text('notes')->nullable();
            $table->foreignId("key_id")->nullable()->references("id")->on("keys")->cascadeOnDelete();
            $table->smallInteger('bpm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
