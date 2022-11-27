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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('name', 128);
            $table->string('version', 64);
            $table->text('description')->nullable();
            $table->string('location', 256)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('country', 64)->nullable();
            $table->float('latitude', 7, 4)->nullable();
            $table->float('longitude', 7, 4)->nullable();
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('categories')
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
        Schema::dropIfExists('events');
    }
};
