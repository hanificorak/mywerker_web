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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // Şehir bilgisi
            $table->string('city'); // kirikkale, ankara

            // Hizmet / Meslek
            $table->string('service'); // elektrikci, kombici

            // SEO slug
            $table->string('slug')->unique(); // kirikkale-elektrikci

            // Opsiyonel açıklama
            $table->text('description')->nullable();

            // aktif/pasif
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->string('title');
            // aynı şehir + hizmet tekrar etmesin
            $table->unique(['city', 'service']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
