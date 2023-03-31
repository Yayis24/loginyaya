
@extends('layouts.adminlte')
@section('bc')
     <li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
     <li class="breadcrumb-item"><a href="{{route('calculator') }}">Calculadora</a></li>
     <li class="breadcrumb-item active">Resultado</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" >
                <div class="card-header" align="center" id="calc"><h2>{{$title}}</h2></div>

                <div class="card-body" id="yu">

                    <p>El resultado es:</p>

                    {{$resultado}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

