@extends('welcome')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Cambiar planes</h4>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="cedula">Cedula</label>
                            <input class="form-control" placeholder="Cedula" required name="cedula" type="text" id="cedula">
                        </div>
                        <div class="col col-sm-12">
                            <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false"
                                aria-controls="collapseExample"><i class="pe-7s-refresh-2"></i> Cambiar planes</a>
                        </div>
                        <hr class="col-md-12">
                        <div class="collapse" id="form0">
                            <hr>
                            <div class="header">
                                <h4 class="title">Plan canales</h4>
                            </div>
                            <form method="POST" action="{{route('internetCrear')}}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <div class="form-group col-md-4">
                                    <label for="NombrePlan">Nombre del Plan</label>
                                    <input class="form-control" placeholder="Nombre del Plan" required name="NombrePlan"
                                        type="text" id="NombrePlan">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Precio">Precio</label>
                                    <input class="form-control capitalaze" placeholder="999999" required name="Precio"
                                        type="number" id="Precio">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="CantidadMB">Canales</label>
                                    <input class="form-control" placeholder="999999" required name="CantidadMB" type="number"
                                        id="CantidadMB">
                                </div>
                            </form>
                            <hr>
                            <div class="header">
                                <h4 class="title">Plan Internet</h4>
                            </div>
                            <form method="POST" action="{{route('internetCrear')}}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <div class="form-group col-md-4">
                                    <label for="NombrePlan">Nombre del Plan</label>
                                    <input class="form-control" placeholder="Nombre del Plan" required name="NombrePlan"
                                        type="text" id="NombrePlan">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Precio">Precio</label>
                                    <input class="form-control capitalaze" placeholder="999999" required name="Precio"
                                        type="number" id="Precio">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="CantidadMB">Cantidad de MegaBites</label>
                                    <input class="form-control" placeholder="999999" required name="CantidadMB" type="number"
                                        id="CantidadMB">
                                </div>
                            </form>
                            <hr>
                            <div class="header">
                                <h4 class="title">Plan Telefonico</h4>
                            </div>
                            <form method="POST" action="{{route('internetCrear')}}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <div class="form-group col-md-4">
                                    <label for="NombrePlan">Nombre del Plan</label>
                                    <input class="form-control" placeholder="Nombre del Plan" required name="NombrePlan"
                                        type="text" id="NombrePlan">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Precio">Precio</label>
                                    <input class="form-control capitalaze" placeholder="999999" required name="Precio"
                                        type="number" id="Precio">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="CantidadMB">Cantidad de Minutos</label>
                                    <input class="form-control" placeholder="999999" required name="CantidadMB" type="number"
                                        id="CantidadMB">
                                </div>
                            </form>
                            <div class="form-group col-md-12">
                                <button class="btn btn-success" type="submit"><i class="fa  fa-upload"></i> Registrar</button>
                            </div>
                        </div>
                        <hr class="col-md-12">
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
