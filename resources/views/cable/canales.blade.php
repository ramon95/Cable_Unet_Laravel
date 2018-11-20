@extends('welcome')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Servicio de Telefonia</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col col-sm-12">
                <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-monitor"></i> Crear Canal</a>
              </div>
              <div class="collapse in" id="form0">
                <hr>
                <form method="POST" action="{{route('canalCrear')}}" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  <div class="form-group col-md-6">
                    <label for="NombrePlan">Nombre del Plan</label>
                    <input class="form-control" placeholder="Nombre del Plan" required name="NombrePlan" type="text" id="NombrePlan">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Precio">Precio</label>
                    <input class="form-control capitalaze" placeholder="999999" required name="Precio" type="number" id="Precio">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Dias">Dias a la semana</label>
                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Seleccione una opción" style="width: 100%;" tabindex="-1" aria-hidden="true" name="Dias[]" required>
                      <option value="">Seleccione una opción</option>
                      @foreach ($dias as $dia)
                        <option value="{{$dia->id}}">{{$dia->descripcion}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Horas">Horas al Dia</label>
                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Seleccione una opción" style="width: 100%;" tabindex="-1" aria-hidden="true" name="Horas[]" required>
                      <option value="">Seleccione una opción</option>
                      @foreach ($horas as $hora)
                        <option value="{{$hora->id}}">{{$hora->descripcion}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <button class="btn btn-success" type="submit"><i class="fa  fa-upload"></i> Crear</button>
                  </div>
                </form>
              </div>
              <hr class="col-md-12">
              @if ($planes->count() > 0)
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($planes as $plan)
                      <tr class="odd gradeX">
                        <td>{{$plan->nombre}}</td>
                        <td>{{$plan->precio}}</td>
                        <td class="center">
                          <a title="Editar" class="btn btn-warning" role="button" data-toggle="collapse" href="#form{{$plan->id}}" aria-expanded="false" aria-controls="collapseExample"><i class="pe-7s-pen" aria-hidden="true"></i></a>
                          <a title="Eliminar" href="{{route('canalBorrar',$plan->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger"><i class="pe-7s-close" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                      <tr class="odd gradeX collapse"  id="form{{$plan->id}}">
                        <td COLSPAN=8>
                          <form method="POST" action="{{route('canalEditar',$plan->id)}}" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group col-md-4">
                              <label for="NombrePlan">Nombre del Plan</label>
                              <input value="{{$plan->nombre}}" class="form-control" placeholder="Nombre del Plan" required name="NombrePlan" type="text" id="NombrePlan">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="Precio">Precio</label>
                              <input value="{{$plan->precio}}" class="form-control capitalaze" placeholder="999999" required name="Precio" type="number" id="Precio">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="Dias">Dias a la semana</label>
                              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Seleccione una opción" style="width: 100%;" tabindex="-1" aria-hidden="true" name="Dias[]" required>
                                <option value="">Seleccione una opción</option>
                                @foreach ($dias as $dia)
                                  @php
                                    $ban = 0;
                                  @endphp
                                  @foreach ($plan->diaSemanas as $diaSemana)
                                    @if ($diaSemana->Dias_id == $dia->id)
                                      @php
                                        $ban = 1;
                                      @endphp
                                    @endif
                                  @endforeach
                                  <option {{($ban == 1) ? 'selected' : ''}} value="{{$dia->id}}">{{$dia->descripcion}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="Horas">Horas al Dia</label>
                              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Seleccione una opción" style="width: 100%;" tabindex="-1" aria-hidden="true" name="Horas[]" required>
                                <option value="">Seleccione una opción</option>
                                @foreach ($horas as $hora)
                                  @php
                                    $ban = 0;
                                  @endphp
                                  @foreach ($plan->horasDias as $horadia)
                                    @if ($horadia->Horas_id == $hora->id)
                                      @php
                                        $ban = 1;
                                      @endphp
                                    @endif
                                  @endforeach
                                  <option {{($ban == 1) ? 'selected' : ''}} value="{{$hora->id}}">{{$hora->descripcion}}</option>
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
              @else
                <div class="alert alert-info col-md-12">
                  <span>No hay planes creados</span>
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
