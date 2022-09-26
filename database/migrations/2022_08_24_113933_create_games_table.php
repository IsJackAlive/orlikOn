<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Pitch;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25)->nullable();
            $table->date('date');
            $table->smallInteger('max_players')->nullable();
            $table->text('description');
            $table->float('hour_start', 4, 2);
            $table->float('hour_end', 4, 2);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Pitch::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
