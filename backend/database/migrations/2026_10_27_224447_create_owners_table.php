<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('ci', 20)->unique();
            $table->string('expedido', 10);
            $table->string('complemento', 5)->nullable();
            $table->date('date_of_birth');
            //datos personales e.e
            $table->string('name');
            $table->string('last_name');
            $table->string('cell_phone');
            $table->string('address');


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
