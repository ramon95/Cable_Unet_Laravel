@extends('welcome')

@section('content')
<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="content" style="display:flex; justify-content: center;">
                @if(auth()->user()->id == 1)
                  <img src="{{asset('img/admin.png')}}" alt="">
                @else
                  <img src="{{asset('img/usuario.png')}}" alt="">
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>    
@endsection