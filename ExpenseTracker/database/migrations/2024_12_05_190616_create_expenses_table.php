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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->decimal('amount',10,2);
            $table->unsignedBigInteger('expense_category_id');
            $table->unsignedBigInteger('user')->nullable();
            $table->string('currency',3)->deafult('USD');
            $table->date('date');
            $table->enum('status',['paid','unpaid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
