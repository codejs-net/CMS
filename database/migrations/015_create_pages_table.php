<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('page_author')->nullable();
            $table->date('page_date')->nullable();
            $table->longText('page_title_en')->nullable();
            $table->longText('page_title_si')->nullable();
            $table->longText('page_title_ta')->nullable();
            $table->longText('page_content_en')->nullable();
            $table->longText('page_content_si')->nullable();
            $table->longText('page_content_ta')->nullable();
            $table->string('page_status')->nullable();
            $table->string('page_name')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
