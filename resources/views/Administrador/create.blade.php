@extends('plantillas.base')

@section('title', 'inicio')

CREAR ESTUDIANTE
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="/administrador/show" class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Crear Estudiante</legend>

                        <div class>
                            Nombres Estudiante <input name="name"></input>
                        </div>

                        <div class>
                            Apellidos Estudiante <input name="apellido"></input>
                        </div>

                        <div class>
                            Email Estudiante <input name="email"></input>
                        </div>

                        <div class>
                            Materia Estudiante <input name="materia"></input>
                        </div>

                        <button type="submit">enviar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
 



 
@endsection

