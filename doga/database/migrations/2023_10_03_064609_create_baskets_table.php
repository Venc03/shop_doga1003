<?php

use App\Models\Basket;
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
        Basket::create('baskets', function (Blueprint $table) {
            $table->primary('basket_id');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('item_id')->references('item_id')->on('products');
            $table->timestamps();
        });

        Basket::create('products', function (Blueprint $table) {
            $table->primary('item_id');
            $table->foreignId('type_id')->references('type_id')->on('product_types');
            $table->date('date');
            $table->timestamps();
        });

        Basket::create('product_types', function (Blueprint $table) {
            $table->primary('type_id');
            $table->string('name', 32)->unique();
            $table->longText('description', 150)->unique();
            $table->char('cost')->unique();
            $table->timestamps();
        });
    }


    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_types');
    }

};

