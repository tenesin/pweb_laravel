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
        Schema::create('flashdisk', function (Blueprint $table) {
            $table->increments('kodeflashdisk'); // Auto-increment primary key
            $table->string('merkflashdisk');
            $table->integer('stokflashdisk');
            $table->char('tersedia', 1); // 'y' or 'n'
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashdisk');
    }
};
