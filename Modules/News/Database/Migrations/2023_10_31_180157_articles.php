<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_articles', function (Blueprint $table)
        {
          // Article id
          $table->id();
          // Article maker
          $table->foreignId('author_id')->constrained('users');
          // Categorys
          $table->integer('category_1');
          $table->integer('category_2')->nullable();
          // Dates
          $table->dateTime('publish_date');
          $table->dateTime('last_edited_date')->nullable();
          // Article contents
          $table->string('title', 50);
          $table->text('content');
          $table->string('slug', 50);
          $table->string('status', 20);
          $table->integer('view_count')->nullable();          
          $table->integer('comments_count')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sk_articles');
    }
};
