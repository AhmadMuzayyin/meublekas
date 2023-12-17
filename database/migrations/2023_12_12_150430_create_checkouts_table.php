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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class)->constrained()->cascadeOnDelete();
            $table->string('customer_id')->unique();
            $table->integer('quantity');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->integer('amount');
            $table->enum('payment_method', ['cod', 'transfer']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
