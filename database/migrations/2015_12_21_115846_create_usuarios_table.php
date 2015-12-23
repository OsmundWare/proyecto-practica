<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('rut_usuario',12)->unique();
			$table->string('nombre',50);
			$table->string('apellido_paterno',50);
			$table->string('apellido_materno',50);
			$table->string('correo')->unique();
			$table->string('asignatura',50);
			$table->string('password', 60);
			$table->String('aprobacion')->default('Pendiente');
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
		Schema::drop('usuarios');
	}

}
