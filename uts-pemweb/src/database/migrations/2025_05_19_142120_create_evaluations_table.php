<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained()->onDelete('cascade');
            $table->integer('score_academic');
            $table->integer('score_interview');
            $table->text('note')->nullable();
            $table->enum('status', ['Lolos', 'Tidak Lolos']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
