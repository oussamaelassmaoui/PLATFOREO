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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('photo_profil')->nullable();
            $table->string('Testimonial_photo1')->nullable();
            $table->string('Testimonial_photo2')->nullable();
            $table->string('Testimonial_photo3')->nullable();
            $table->string('Testimonial_photo4')->nullable();
            $table->string('Contact_photo')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner_About1')->nullable();
            $table->string('banner_About2')->nullable();
            $table->string('banner_Services')->nullable();
            $table->string('banner_Services_Details')->nullable();
            $table->string('banner_Portfolio')->nullable();
            $table->string('banner_blog')->nullable();
            $table->string('banner_Portfolio_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
