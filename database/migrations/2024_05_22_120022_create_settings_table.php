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

            $table->string('website_name');
            $table->string('website_url');
            $table->string('page_title');
            $table->string('meta_keyword', 500);
            $table->string('meta_description', 500);

            $table->string('address', 500);
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email1');
            $table->string('email2');

            $table->string('facebook');
            $table->string('x');
            $table->string('instagram');
            $table->string('youtube');

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
