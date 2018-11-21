<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateServiciosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Servicios';
    /**
     * Run the migrations.
     * @table Servicios
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('fechaIncio')->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->date('fechaCorte')->nullable()->comment('Fecha en la que se cobra el plan nuevamente ');
            $table->unsignedInteger('Usuario_id');
            $table->unsignedInteger('Telefonia_id')->nullable();
            $table->unsignedInteger('Internet_id')->nullable();
            $table->unsignedInteger('PlanCanales_id')->nullable();

            $table->index(["Internet_id"], 'fk_Servicios_Internet1_idx');

            $table->index(["PlanCanales_id"], 'fk_Servicios_PlanCanales1_idx');

            $table->index(["Telefonia_id"], 'fk_Servicios_Telefonia1_idx');

            $table->index(["Usuario_id"], 'fk_Servicios_Usuario_idx');
            $table->nullableTimestamps();


            $table->foreign('Usuario_id', 'fk_Servicios_Usuario_idx')
                ->references('id')->on('Usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Telefonia_id', 'fk_Servicios_Telefonia1_idx')
                ->references('id')->on('Telefonia')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Internet_id', 'fk_Servicios_Internet1_idx')
                ->references('id')->on('Internet')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('PlanCanales_id', 'fk_Servicios_PlanCanales1_idx')
                ->references('id')->on('PlanCanales')
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
