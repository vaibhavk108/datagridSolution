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
        Schema::create('family_member', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->constrained('family_head');
            $table->string('member_name');
            $table->date('member_birthdate');
            $table->string('member_marital_status');
            $table->date('member_wedding_date')->nullable();
            $table->text('education')->nullable();
            $table->string('member_photo')->nullable();
            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_member');
    }
};
