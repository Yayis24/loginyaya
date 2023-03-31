
@extends('layouts.adminlte')
@section('bc')
     <li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
     <li class="breadcrumb-item active">Calculadora</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" >
                <div class="card-header" align="center" id="calc"><h2>{{$title}}</h2></div>

                <div class="card-body" id="yu">
                   {!!Form::open(['url'=> route('resultado')])!!}

                   <div class="mb-3">
                    <label for="num1" class="form-label">Ingrese el primer numero</label>
                    {!!Form::number('num1',null,['class'=>'form-control']) !!}
                
               </div>
                  <div class="mb-3">
                    <label for="num2" class="form-label">Ingrese el segundo numero</label>
                    {!!Form::number('num2',null,['class'=>'form-control']) !!}
                  </div>

                  <p>Seleccione la operacion a realizar</p>

                  {!! Form::submit('+', ['class'=> 'btn btn-info', 'name' => 'op']) !!} 

                  {!! Form::submit('-', ['class'=> 'btn btn-info', 'name' => 'op']) !!}

                  {!! Form::submit('x', ['class'=> 'btn btn-info', 'name' => 'op']) !!}

                  {!! Form::submit('÷', ['class'=> 'btn btn-info', 'name' => 'op']) !!}

                   {!! Form::close() !!}

                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

