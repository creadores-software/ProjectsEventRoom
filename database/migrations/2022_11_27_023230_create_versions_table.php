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
        Schema::create('versions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id');
            $table->string('name', 64);
            $table->string('location', 256)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('country', 64)->nullable();
            $table->float('latitude', 7, 4)->nullable();
            $table->float('longitude', 7, 4)->nullable();
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->foreign('event_id')
                ->references('id')->on('events')
                    ->onDelete('restrict')
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
        Schema::dropIfExists('versions');
    }
};
