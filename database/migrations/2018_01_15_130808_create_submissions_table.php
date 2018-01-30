<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type');
            $table->string('title');
            $table->string('by');
            $table->string('for')->nullable();
            $table->text('project_overview');
            $table->longText('project_details');
            $table->string('categories');
            $table->string('project_url')->nullable();
            $table->string('project_pdf')->nullable();
            $table->string('project_video')->nullable();
            $table->string('image_1');
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
            $table->string('image_10')->nullable();
            $table->string('thumbnail');
            $table->string('team', 800)->nullable();
            $table->string('status')->default('Evaluation In Process');
            $table->string('payment_status')->default('Not Paid');
            $table->string('payment_proof')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}
