<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');      // név
            $table->string('email');     // email
            $table->string('subject');   // tárgy
            $table->text('message');     // üzenet szövege
            $table->timestamps();        // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
