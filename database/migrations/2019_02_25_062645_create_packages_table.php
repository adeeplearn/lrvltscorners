<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('package_name')->unique();
            $table->string('slug')->unique();
            $table->string('details')->nullable();
            $table->integer('destinasi_id');
            $table->integer('category_id');
            $table->integer('harga_mulai');
            $table->integer('harga');
            $table->text('rundown');
            $table->text('harga_termasuk');
            $table->text('harga_tidak_termasuk');
            $table->text('syarat');
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
        Schema::dropIfExists('packages');
    }
}
