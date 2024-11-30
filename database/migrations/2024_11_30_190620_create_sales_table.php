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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('payment_method_id')->constrained();
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('pending');
            $table->decimal('total', 8, 2);
            $table->decimal('discount', 8, 2)->default(0);
            $table->timestamp('sale_date')->useCurrent();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
