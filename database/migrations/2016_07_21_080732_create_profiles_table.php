<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
           
           
            
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('about')->nullable();
            
            $table->string('religion')->nullable();
            $table->string('website')->nullable();
            $table->string('work')->nullable();
            $table->string('relationship_status')->nullable();
            $table->string('home_town')->nullable();
            $table->string('location')->nullable();
            $table->string('timezone')->nullable();
            
           
            $table->string('twitter_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('photo')->nullable();
           
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
        Schema::drop('profiles');
    }
}
