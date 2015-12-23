@extends('master')

@section('contenido')

    <div class="panel panel-default">
                <br>

                <div class="panel-heading">Lista de Usuarios</div>

                <table class="table table-responsive table-bordered">

                        <thead>
                            <tr>
                                    <th> ID </th>
                                    <th> Nombre </th>
                                    <th> Correo </th>
                                    <th> Estado de probacion </th>
                            </tr>


                        </thead>

                                 <body>

                                        @foreach($usuario as $usuarios)
                                            <tr>

                                                <td>{{$usuarios->id}}</td>
                                                <td>{{$usuarios->nombre}}</td>
                                                <td>{{$usuarios->correo}}</td>
                                                <td>{{$usuarios->aprobacion}}</td>

                                                <td>
                                                    <a href="http://localhost:8080/proyecto-practica/public/usuario/{{$usuarios->id}}/edit"
                                                       class="btn btn-warning btn-xs">Editar </a>
                                                    <a href="http://localhost:8080/proyecto-practica/public/usuario/{{$usuarios->id}}"
                                                       class="btn btn-success btn-xs">Detalle </a>
                                                </td>
                                            </tr>

                                        @endforeach
                                </body>

                </table>
    </div>



@stop