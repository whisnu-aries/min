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
        Schema::disableForeignKeyConstraints();

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('service_id')->constrained();
            $table->string('name');
            $table->string('business_name');
            $table->string('email');
            $table->string('no_whatsapp');
            $table->text('description');
            $table->enum('status', ["unread","read","contacted"])->default('unread');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
