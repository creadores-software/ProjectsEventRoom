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
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id');
            $table->string('name', 128);
            $table->text('description')->nullable();
			$table->string('url', 128)->nullable();
			// - (fotos, videos, archivos, enlaces)            
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
        Schema::dropIfExists('presentations');
    }
};
