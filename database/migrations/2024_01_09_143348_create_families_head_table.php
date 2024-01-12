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
        Schema::create('family_head', function (Blueprint $table) {
            $table->id();
            $table->string('head_name');
            $table->string('head_surname');
            $table->date('head_birthdate');
            $table->string('head_mobile')->nullable();
            $table->text('head_address');
            $table->string('head_state');
            $table->string('head_city');
            $table->string('head_pincode');
            $table->string('marital_status');
            $table->date('wedding_date')->nullable();
            $table->text('hobbies')->nullable();
            $table->string('head_photo')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_head');
    }
};