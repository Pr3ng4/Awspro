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
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->string('industry_type')->nullable();
            $table->string('product_type')->nullable();
            $table->string('business_type')->nullable();
            $table->string('estimated_budget')->nullable();
            $table->string('location')->nullable();
            $table->integer('user_id');
            $table->integer('manager_id')->nullable();
            $table->string('additional_details')->nullable();
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
        Schema::dropIfExists('ideas');
    }
};
