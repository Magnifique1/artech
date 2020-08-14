<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('id_number');
            $table->string('docIDPath')->nullable();
            $table->string('docKRAPath')->nullable();
            $table->unsignedBigInteger('default_user_id');
            $table->unsignedBigInteger('default_group_id');
            $table->timestamps();

            $table->foreign('default_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('default_group_id')->references('id')->on('mgroups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
