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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('abstract');
            $table->text('keywords');
            $table->timestamp('publication_date');
            $table->string('author_document_url');
            $table->bigInteger('user_id')->unsigned();
            $table->text('authors');
            // Remove the following two lines if you've manually added 'created_at' and 'updated_at'
            $table->timestamps();
            // or use $table->timestamps(0) to prevent the automatic creation of 'created_at' and 'updated_a
            

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papers');
    }
};
