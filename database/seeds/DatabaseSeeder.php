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
        'direccion'  => 'san cristobal',
        'Rol_id'     => '1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);
    }
}
