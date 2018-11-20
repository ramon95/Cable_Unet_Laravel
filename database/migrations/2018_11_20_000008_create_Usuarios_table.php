<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Usuarios';

    /**
     * Run the migrations.
     * @table Usuarios
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('Llave primaria de la tabla usuario');
            $table->string('email', 45)->comment('correo electronico para identificacion del login');
            $table->string('password', 200)->comment('contraseña para ingresar al login');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->integer('cedula')->nullable();
            $table->integer('rif')->nullable();
            $table->string('direccion', 45);
            $table->rememberToken();
            $table->unsignedInteger('Rol_id');

            $table->index(["Rol_id"], 'fk_Usuario_Rol1_idx');
            $table->nullableTimestamps();


            $table->foreign('Rol_id', 'fk_Usuario_Rol1_idx')
                ->references('id')->on('Rol')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
