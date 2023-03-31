
@extends('layouts.adminlte')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" ><h2>Test de depresion</h2></div>

                <div class="card-body">
                    
                    <h5>1.¿Te has sentido cansado(a) o con poca energía?</h5>
                    <input type="radio" name="preuno" value="s">Si<br>
                    <input type="radio" name="preuno" value="n">No<br><br>

                    <h5>2.¿Has tenido dificultad para concentrarte en ciertas actividades, tales como leer el periódico o ver la televisión?</h5>
                    <input type="radio" name="predos" value="s">Si<br>
                    <input type="radio" name="predos" value="n">No<br><br>

                    <h5>3.¿Te has sentido decaído(a), deprimido(a) o sin esperanzas?</h5>
                    <input type="radio" name="pretres" value="s">Si<br>
                    <input type="radio" name="pretres" value="n">No<br><br>

                    <h5>4.¿Has experimentado poco interés o placer en hacer cosas?</h5>
                    <input type="radio" name="prefor" value="s">Si<br>
                    <input type="radio" name="prefor" value="n">No<br><br>

                    <h5>5.¿Has tenido dificultad para quedarte, permanecer dormido(a), o has dormido demasiado?</h5>
                    <input type="radio" name="prefive" value="s">Si<br>
                    <input type="radio" name="prefive" value="n">No<br><br>

                    <center><button type="button " class="btn btn-success ">Enviar respuestas</button></center>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection

