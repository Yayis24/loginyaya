@extends('layouts.adminlte')
@section('bc')
     <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
     <li class="breadcrumb-item"><a href="{{ route ('apprentices') }}">Aprendices</a></li>
     <li class="breadcrumb-item active">Editar Aprendices</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" align="center">{{$title}}</div>

                <div class="card-body">
                    {!!Form::open(['url'=> route('apprentices.edit',$apprentice->id)])!!}

                   <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    {!!Form::text('name',$apprentice->name,['class'=>'form-control']) !!}
                
                  </div>
                  <div class="mb-3">
                    <label for="document_number" class="form-label">Numero Documento</label>
                    {!!Form::number('document_number',$apprentice->document_number,['class'=>'form-control']) !!}
                  </div>

                  <div class="mb-3">
                    <label for="city" class="form-label">Ciudad</label>
                    {!!Form::text('city',$apprentice->city,['class'=>'form-control']) !!}
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    {!!Form::email('email',$apprentice->email,['class'=>'form-control']) !!}
                  </div>

                  <div class="mb-3">
                    <label for="telephone" class="form-label">Telefono</label>
                    {!!Form::number('telephone',$apprentice->telephone,['class'=>'form-control']) !!}
                  </div>

                  {!! Form::submit('Modificar', ['class'=> 'btn btn-info', 'name' => 'op']) !!} 

                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
