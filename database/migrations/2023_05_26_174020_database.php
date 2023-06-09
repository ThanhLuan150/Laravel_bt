<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id_account');
            $table->string('name', 50);
            $table->string('email', 100);
            $table->string('password', 20);
            $table->integer('verify');
            $table->date('role');
            $table->timestamps();
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id_movie');
            $table->string('name', 50);
            $table->string('avatar');
            $table->string('premiere_date');
            $table->date('time_begin');
            $table->string('country', 20);
            $table->string('description', 30);
            $table->timestamps();
        });

        Schema::create('room', function (Blueprint $table) {
            $table->increments('id_room');
            $table->string('name');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id_schedule');
            $table->unsignedInteger('movie_id');
            $table->unsignedInteger('room_id');
            $table->foreign('movie_id')->references('id_movie')->on('movies');
            $table->foreign('room_id')->references('id_room')->on('room');
            $table->date('movie_date');
            $table->integer('time_begin');
            $table->date('time_end');
            $table->decimal('price');
            $table->timestamps();
        });

        Schema::create('movie_cat', function (Blueprint $table) {
            $table->increments('id_movie_cat');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id_movie')->on('movies');
            $table->timestamps();
        });

        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id_ticket');
            $table->unsignedInteger('schedule_id');
            $table->foreign('schedule_id')->references('id_schedule')->on('schedule');
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')->references('id_account')->on('accounts');
            $table->string('full_name', 50);
            $table->string('creat_at');
            $table->integer('phone');
            $table->date('time_end');
            $table->tinyInteger('status');
            $table->timestamps();
        });
Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id_invoice');
            $table->unsignedInteger('ticket_id');
            $table->unsignedInteger('user_id');
            $table->foreign('ticket_id')->references('id_ticket')->on('tickets');
            $table->foreign('user_id')->references('id_user')->on('users');
            $table->date('book_date');
            $table->integer('code');
            $table->decimal('total_price');
            $table->timestamps();
        });
        

        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id_like');
            $table->unsignedInteger('movie_id');
            $table->unsignedInteger('user_id');
            $table->foreign('movie_id')->references('id_movie')->on('movies');
            $table->foreign('user_id')->references('id_user')->on('users');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id_category');
            $table->string('name');
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
        Schema::dropIfExists('likes');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('users');
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('movie_cat');
        Schema::dropIfExists('schedule');
        Schema::dropIfExists('room');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('accounts');
    }
};
?>