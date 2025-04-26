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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id' column, auto-increment
    
            $table->unsignedBigInteger('category_id'); // For product-category relationship
            $table->string('name'); // Name of the product
            $table->text('description')->nullable(); // Description of the product (optional)
            $table->decimal('price', 8, 2); // Price like 999999.99
            $table->integer('quantity')->default(0); // Stock quantity
            $table->string('image')->nullable(); // Image filename or path (optional)
    
            $table->timestamps(); // created_at and updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
