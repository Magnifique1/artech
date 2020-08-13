<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('id_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->string('docIDPath')->nullable();
            $table->string('docKRAPath')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('default_branch_id');
        });

        DB::table('users')->insert(
            array(
                'fname'=>'Magnifique',
                'lname'=>'Nsengimana',
                'phone1'=>'0797301935',
                'phone2'=>'0797301935',
                'id_number'=>'123456',
                'email'=>'test@test.com',
                'password'=>Hash::make('123'),
                'role'=>'ADMIN',
                'default_branch_id'=>1,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
