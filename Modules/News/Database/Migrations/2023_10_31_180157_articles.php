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
          $table->id();
          $table->foreignId('author_id')->constrained('users');
          $table->dateTime('publish_date');
          $table->dateTime('last_edited_date')->nullable();
          $table->string('title', 50);
          $table->text('content');
          $table->string('image');
          $table->string('slug');
          $table->integer('status');
          $table->integer('view_count')->nullable();          
          $table->integer('comments_count')->nullable();          
          $table->timestamps();
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
