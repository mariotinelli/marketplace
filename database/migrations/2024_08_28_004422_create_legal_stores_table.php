<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('legal_stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained();
            $table->string('cnpj')->unique();
            $table->string('name');
            $table->string('corporate_name');
            $table->string('state_registration');
            $table->string('municipal_registration');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('legal_stores');
    }
};
