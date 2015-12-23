@extends('master')

@section('contenido')
    <h1>Registro Usuario</h1>

    {!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}

        <div class="form-group">

            {!! Form::label('Rut:') !!}
            {!! Form::text('rut_usuario',null,
            ['class'=>'form-control','placeholder'=>'texto',]) !!}
        </div>

        <div class="form-group">

            {!! Form::label('Nombre') !!}
            {!! Form::text('nombre',null,
            ['class'=>'form-control','placeholder'=>'Ingresa el correo electronico']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('Apellido Paterno') !!}
            {!! Form::text('apellido_paterno',null,
            ['class'=>'form-control','placeholder'=>'Ingresa el correo electronico']) !!}
        </div>

    <div class="form-group ">

        {!! Form::label('Apellido Materno') !!}
        {!! Form::text('apellido_materno',null,
        ['class'=>'form-control','placeholder'=>'Ingresa el correo electronico']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('Correo') !!}
        {!! Form::text('correo',null,
        ['class'=>'form-control','placeholder'=>'Ingresa el correo electronico']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('Asignatura') !!}
        {!! Form::text('asignatura',null,
        ['class'=>'form-control','placeholder'=>'Ingresa el correo electronico']) !!}
    </div>


    <div class="form-group">

            {!! Form::label('Password:') !!}
            {!! Form::password('password',
            ['class'=>'form-control','placeholder'=>'Ingresa la contraseña']) !!}
    </div>


    <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
            @if($errors->any())
                <ul class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
    @endif

@stop