<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords_presentations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keyword_id');
            $table->foreignId('presentation_id');
            $table->timestamps();

            $table->foreign('keyword_id')
                ->references('id')->on('keywords')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('presentation_id')
                ->references('id')->on('presentations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keywords_presentations');
    }
};
