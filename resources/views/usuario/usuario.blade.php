@extends('welcome')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Usuarios</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col col-sm-12">
                <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-users"></i> Crear usuario</a>
              </div>
              <div class="collapse" id="form0">
                <hr>
                <form method="POST" action="{{route('usuarioCrear')}}" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <div class="form-group col-md-6">
                    <label for="email">Correo electronico</label>
                    <input class="form-control" placeholder="E-mail" required name="email" type="email" id="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">Contraseña</label>
                    <input class="form-control" placeholder="Contraseña" required name="password" type="password" id="password">
                  </div> 
                  <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" placeholder="Nombre" required name="nombre" type="text" id="nombre">
                  </div> 
                  <div class="form-group col-md-6">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" placeholder="Apellido" required name="apellido" type="text" id="apellido">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cedula">Cedula</label>
                    <input class="form-control" placeholder="Cedula" required name="cedula" type="number" id="cedula">
                  </div>   
                <div class="form-group col-md-6">
                    <label for="rif">Rif</label>
                    <input class="form-control" placeholder="Rif" required name="rif" type="number" id="rif">
                </div>   
                <div class="form-group col-md-6">
                    <label for="direccion">Direccion</label>
                    <input class="form-control" placeholder="Direccion" required name="direccion" type="text" id="direccion">
                </div>   
                <div class="form-group col-md-4">
                    <label for="rol">Rol</label>
                    <select class="form-control" name="rol" required>
                        @foreach ($roles as $rol)
                          <option value="{{$rol->id}}">{{$rol->descripcion}}</option>
                        @endforeach
                    </select>
                </div>                    
                  <div class="form-group col-md-12">
                    <button class="btn btn-success" type="submit"><i class="fa  fa-upload"></i> Crear</button>
                  </div>
                </form>
              </div>
              <hr class="col-md-12">
              @if ($usuarios->count() > 0)
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>E-mail</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($usuarios as $usuario)
                      <tr class="odd gradeX">
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->apellido}}</td>
                        <td class="center">
                          <a title="Editar" class="btn btn-warning" role="button" data-toggle="collapse" href="#form{{$usuario->id}}" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-pen" aria-hidden="true"></i></a>
                          <a title="Eliminar" href="{{route('usuarioBorrar',$usuario->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger"><i class="pe-7s-close" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                      <tr class="odd gradeX collapse"  id="form{{$usuario->id}}">
                        <td COLSPAN=8>
                          <form method="POST" action="{{route('usuarioEditar',$usuario->id)}}" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <label for="email">Correo electronico</label>
                            <input value="{{$usuario->email}}" class="form-control" placeholder="E-mail" required name="email" type="email" id="email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="password">Contraseña</label>
                                <input class="form-control" placeholder="Contraseña" required name="password" type="password" id="password">
                              </div> 
                              <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input value="{{$usuario->nombre}}" class="form-control" placeholder="Nombre" required name="nombre" type="text" id="nombre">
                              </div> 
                              <div class="form-group col-md-6">
                                <label for="apellido">Apellido</label>
                                <input value="{{$usuario->apellido}}" class="form-control" placeholder="Apellido" required name="apellido" type="text" id="apellido">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="cedula">Cedula</label>
                                <input value="{{$usuario->cedula}}" class="form-control" placeholder="Cedula" required name="cedula" type="number" id="cedula">
                              </div>   
                              <div class="form-group col-md-6">
                                <label for="rif">Rif</label>
                                <input value="{{$usuario->rif}}" class="form-control" placeholder="Rif" required name="rif" type="number" id="rif">
                              </div>   
                              <div class="form-group col-md-6">
                                <label for="direccion">Direccion</label>
                                <input value="{{$usuario->direccion}}" class="form-control" placeholder="Direccion" required name="direccion" type="text" id="direccion">
                              </div>   
                              <div class="form-group col-md-4">
                                <label for="rol">Rol</label>
                                <select class="form-control" name="rol" required>
                                    @foreach ($roles as $rol)
                                      <option value="{{$rol->id}}">{{$rol->descripcion}}</option>
                                    @endforeach
                                </select>
                                </div>                            
                            <div class="form-group col-md-12">
                              <button class="btn btn-warning" type="submit"><i class="pe-7s-pen"></i> Editar</button>
                            </div>
                          </form>
                        </td>
                      </tr>
                      <tr class="odd gradeX"></tr>
                    @endforeach
                  </tbody>
                </table>
                {!!$usuarios->render()!!}
              @else
                <div class="alert alert-info col-md-12">
                  <span>No hay usuarios creados</span>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script type="text/javascript">
    $('.select2').select2()
  </script>
@endsection
