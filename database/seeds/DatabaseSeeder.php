<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Rol')->insert([
        'descripcion'  =>  'Administrador',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Rol')->insert([
        'descripcion'  =>  'Usuario',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '01AM-02AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '02AM-03AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '03AM-04AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '04AM-05AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '05AM-06AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '06AM-07AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '07AM-08AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '08AM-09AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '09AM-10AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '10AM-11AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '11AM-12PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '12PM-01PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '01PM-02PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '02PM-03PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '03PM-04PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '04PM-05PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '05PM-06PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '06PM-07PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '07PM-08PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '08PM-09PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '09PM-10PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '10PM-11PM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '11PM-12AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Horas')->insert([
        'descripcion'  =>  '12AM-01AM',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Lunes',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Martes',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Miercoles',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Jueves',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Viernes',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Sabado',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Dias')->insert([
        'descripcion'  =>  'Domingo',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Usuarios')->insert([
        'email'      =>  'admin@unet.com',
        'password'   => bcrypt('12345'),
        'nombre'     => 'admin',
        'apellido'   => 'admin',
        'cedula'     =>  '1',
        'direccion'  => 'san cristobal',
        'Rol_id'     => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Usuarios')->insert([
        'email'      =>  'user@unet.com',
        'password'   => bcrypt('12345'),
        'nombre'     => 'Usuario',
        'apellido'   => 'Normal',
        'cedula'     =>  '2',
        'direccion'  => 'san cristobal',
        'Rol_id'     => '2',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Canales')->insert([
        'nombre'     => 'HBO',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('DiaSemanas')->insert([
        'Canales_id'  => '1',
        'Dias_id'     => '1',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
      ]);

      DB::table('DiaSemanas')->insert([
        'Canales_id'  => '1',
        'Dias_id'     => '2',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
      ]);

      DB::table('HoraDias')->insert([
        'Horas_id'   => '1',
        'Canales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('HoraDias')->insert([
        'Horas_id'   => '5',
        'Canales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Canales')->insert([
        'nombre'     => 'ESPN',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('DiaSemanas')->insert([
        'Canales_id'  => '1',
        'Dias_id'     => '1',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
      ]);

      DB::table('DiaSemanas')->insert([
        'Canales_id'  => '1',
        'Dias_id'     => '2',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
      ]);

      DB::table('DiaSemanas')->insert([
        'Canales_id'  => '1',
        'Dias_id'     => '4',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
      ]);

      DB::table('DiaSemanas')->insert([
        'Canales_id'  => '1',
        'Dias_id'     => '6',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
      ]);

      DB::table('HoraDias')->insert([
        'Horas_id'   => '1',
        'Canales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('HoraDias')->insert([
        'Horas_id'   => '3',
        'Canales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('HoraDias')->insert([
        'Horas_id'   => '5',
        'Canales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Internet')->insert([
        'nombre'     => 'Aba 10Mb',
        'precio'     => '13000',
        'cantMB'     => '10',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Internet')->insert([
        'nombre'     => 'Aba 6Mb',
        'precio'     => '9000',
        'cantMB'     => '6',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Telefonia')->insert([
        'nombre'     => 'Conectate con todos',
        'precio'     => '1500',
        'cantMin'     => '300',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('Telefonia')->insert([
        'nombre'     => 'Llamandito',
        'precio'     => '4000',
        'cantMin'     => '900',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('PlanCanales')->insert([
        'precio'     => '5000',
        'descripcion'=> 'Peliculas y deportes',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('ListaCanales')->insert([
        'Canales_id' => '1',
        'PlanCanales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);

      DB::table('ListaCanales')->insert([
        'Canales_id' => '2',
        'PlanCanales_id' => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);
    }
}
