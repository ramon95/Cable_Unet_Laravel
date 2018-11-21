<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlancanalesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'PlanCanales';

    /**
     * Run the migrations.
     * @table PlanCanales
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->decimal('precio', 8, 2)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->unsignedInteger('ListaCanales_id');

            $table->index(["ListaCanales_id"], 'fk_PlanCanales_ListaCanales1_idx');
            $table->nullableTimestamps();


            $table->foreign('ListaCanales_id', 'fk_PlanCanales_ListaCanales1_idx')
                ->references('id')->on('ListaCanales')
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
