<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	//may need to add another table solely for the contact form
	public function up()
	{
		Schema::create('subscribed', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('email');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscribed');
	}

}
