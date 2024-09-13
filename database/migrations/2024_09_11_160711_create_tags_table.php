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
        Schema::create('tags',  function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->timestamps();
        });

        Schema::create('job_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Jobs::class,'jobs_listing_id');
            $table->foreignIdFor(App\Models\Tags::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_tags');
    }
};
