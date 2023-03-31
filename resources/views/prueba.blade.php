
@extends('layouts.adminlte')

@section('content')



<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-success">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{{$title}}</h1>
      <p class="lead my-3" align="justify">{{$content}}</p>
      
    </div>
  </div>

  <div class="card" >
  <div class="card-header text-bg-dark" align="center">
    <h3> Siempre buscando ayudarte </h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Nuestro objetivo es diagnosticar mediante cuestionarios los diferentes problemas en los que creas sentirte afectado</p>
      <footer class="blockquote-footer">En caso de obtener un resultado que supere el 60% del cuestionario, por favor, consulte con un especialista.<cite title="Source Title"><br> Sientete libre de iniciar </cite> </footer>
    </blockquote>
  </div>
</div> <br>

<div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2021/01/26173150/que-es-la-ansiedad.jpg" class="card-img-top img-fluid" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$anxiety}}</h5>
    <p class="card-text" align="justify">Sentimiento de miedo, temor e inquietud. Puede hacer que sude, se sienta inquieto y tenso, y tener palpitaciones. </p>
    <a href="nuevaprueba" class="btn btn-success">Iniciar cuestionario</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="https://www.isesinstituto.com/sites/default/files/superar_depresion_por_ti_mismo.jpg" class="card-img-top img-fluid" alt="..." >
  <div class="card-body">
    <h5 class="card-title">{{$depression}}</h5>
    <p class="card-text" align="justify">Grupo de afecciones asociadas a los cambios de humor de una persona, como la depresión o el trastorno bipolar.</p>
    <a href="#" class="btn btn-success">Iniciar cuestionario</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="https://www.centromedicoelpilar.com/wp-content/uploads/2022/03/Trastorno-bipolar-causas-1024x573.png" class="card-img-top img-fluid" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$bipolar}}</h5>
    <p class="card-text" align="justify">Trastorno que provoca altibajos emocionales, que van desde trastornos de depresión hasta episodios maníacos.</p><br>
    <a href="#" class="btn btn-success">Iniciar cuestionario</a>
  </div>
</div>
    </div>
  </div>
</div>



@endsection
