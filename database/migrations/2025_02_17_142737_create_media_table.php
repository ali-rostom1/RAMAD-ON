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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger("id_recipe")->nullable();
            $table->unsignedBigInteger("id_post")->nullable();
            $table->timestamps();

            $table->foreign("id_recipe")->references("id")->on("recipe")->onDelete("cascade");
            $table->foreign("id_post")->references("id")->on("posts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
