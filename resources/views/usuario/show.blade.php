@extends('master')

@section('contenido')


    <div class="panel panel-default">
            <div class="panel-heading"> Detalles</div>

            <table class="table table-responsive table-bordered">
                <thead>

                        <tr>
                                <th> Rut usuario </th>
                                <th> Nombre </th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno </th>
                                <th>Correo</th>
                                <th>asignatura</th>
                                <th>Aprobacion</th>


                        </tr>

                </thead>

                <body>
                        <tr>


                                <td>{{$usuario->rut_usuario}}</td>
                                <td>{{$usuario->nombre}}</td>
                                <td>{{$usuario->apellido_paterno}}</td>
                                <td>{{$usuario->apellido_materno}}</td>
                                <td>{{$usuario->correo}}</td>
                                <td>{{$usuario->asignatura}}</td>
                                <td>{{$usuario->aprobacion}}</td>

                        </tr>

                </body>

            </table>



    </div>

@stop