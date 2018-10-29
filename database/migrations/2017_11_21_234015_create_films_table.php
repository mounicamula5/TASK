<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration to create films table
 *
 * @author Andsalves
 */
class CreateFilmsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('slug', 80);
            $table->text('description');
            $table->dateTime('release_date');
            $table->unsignedDecimal('rating', 2, 1);
            $table->unsignedDecimal('ticket_price', 5, 2);
            $table->string('country', 64);
            $table->string('photo', 200);

            $table->index('name', 'name_idx');
            $table->index('release_date', 'release_date_idx');
            $table->index('ticket_price', 'ticket_price_idx');

            $table->unique('slug');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('films');
    }
}
