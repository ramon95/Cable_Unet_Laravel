@extends('welcome')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Facturacion</h4>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="cedula">Cedula</label>
                            <input class="form-control" placeholder="Cedula" required name="cedula" type="text" id="cedula">
                        </div>
                        <div class="col col-sm-12">
                            <a class="btn btn-success" role="button" data-toggle="collapse" href="#form0" aria-expanded="false"
                            aria-controls="collapseExample"><i class="pe-7s-piggy"></i> Factura</a>
                        </div>
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