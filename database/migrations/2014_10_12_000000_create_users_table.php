<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Keygen\Keygen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('noreg',128);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('asalsekolah');
            $table->string('namasekolah');
            $table->enum('role',['users','admin','keuangan']);
            $table->enum('status_pendaftaran_lomba',['N','Y']);
            $table->enum('status_bayar_lomba',['N','Y']);
            $table->rememberToken();
            $table->timestamps();
        });
        // default value migration database
        DB::table('users')->insert( array(
            'name' => 'admingravitasi',
            'email' => 'admingravitasi@gmail.com',
            'noreg' => Keygen::numeric(10)->generate(),
            'password' => Hash::make('admingravitasi1234567890'),
            'asalsekolah' => 'universitas haluoleo',
            'namasekolah' => 'UHO',
            'role' => 'admin',
        ));
        DB::table('users')->insert( array(
            'name' => 'adminkeuangan',
            'email' => 'adminkeuangan@gmail.com',
            'noreg' => Keygen::numeric(10)->generate(),
            'password' => Hash::make('adminkeuangan1234567890'),
            'asalsekolah' => 'universitas haluoleo',
            'namasekolah' => 'UHO',
            'role' => 'keuangan',
        ));
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
