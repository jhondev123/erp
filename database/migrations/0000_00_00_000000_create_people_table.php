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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->foreignId('document_type_id')->constrained('document_types', 'id');
            $table->string('document_number')->unique();
            $table->string('birthdate')->nullable();
            $table->enum('type',['physical','juridical'])->default('physical');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
