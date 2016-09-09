<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
			$table->string('address1', 150);
			$table->string('address2', 150);
			$table->string('city', 100);
			$table->string('pcode', 50);
			$table->string('country', 150);
			$table->string('telephone', 20);
			$table->string('mobile', 20);
			$table->string('workphone', 20);
			$table->string('fax', 20);
			$table->string('primaryemail', 150);
			$table->string('altemail', 150);
			$table->string('website', 150);
            $table->text('description');
            $table->tinyInteger('status');
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
        Schema::drop("clients");
    }
}