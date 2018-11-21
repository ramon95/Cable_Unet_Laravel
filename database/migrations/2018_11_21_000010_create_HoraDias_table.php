<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoradiasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'HoraDias';

    /**
     * Run the migrations.
     * @table HoraDias
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Horas_id');
            $table->integer('Canales_id');

            $table->index(["Canales_id"], 'fk_HoraDias_Canales1_idx');

            $table->index(["Horas_id"], 'fk_HoraDias_Horas1_idx');
            $table->nullableTimestamps();


            $table->foreign('Horas_id', 'fk_HoraDias_Horas1_idx')
                ->references('id')->on('Horas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Canales_id', 'fk_HoraDias_Canales1_idx')
                ->references('id')->on('Canales')
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
