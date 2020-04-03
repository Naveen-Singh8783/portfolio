<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->date('dob');
            $table->text('address');
            $table->string('email');
            $table->text('phonenum');
            $table->integer('noofprojects');
            $table->text('content');
            $table->timestamp('published_at')->nullable();
            $table->string('image');
            $table->string('classten');
            $table->string('classtw');
            $table->string('university');
            $table->string('projectonename');
            $table->string('projecttwoname');
            $table->string('projectthreename');
            $table->text('projectone');
            $table->text('projecttwo');
            $table->text('projectthree');
            $table->string('experienceone');
            $table->string('experiencetwo');
            $table->string('experiencethree');
            $table->integer('category_id');
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
        Schema::dropIfExists('posts');
    }
}
