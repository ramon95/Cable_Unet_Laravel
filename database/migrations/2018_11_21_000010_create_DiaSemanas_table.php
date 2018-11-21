<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDiasemanasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'DiaSemanas';
    /**
     * Run the migrations.
     * @table DiaSemanas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Canales_id');
            $table->integer('Dias_id');

            $table->index(["Canales_id"], 'fk_DiasSemana_Canales1_idx');

            $table->index(["Dias_id"], 'fk_DiasSemana_Dias1_idx');
            $table->nullableTimestamps();


            $table->foreign('Canales_id', 'fk_DiasSemana_Canales1_idx')
                ->references('id')->on('Canales')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Dias_id', 'fk_DiasSemana_Dias1_idx')
                ->references('id')->on('Dias')
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
