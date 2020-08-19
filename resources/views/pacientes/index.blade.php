@extends('layouts.app')

@section('botones')

<a href="{{ route('pacientes.create')}}" class="btn btn-primary mr-2">Nuevo Paciente</a>
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes</title>
</head>
<body>
    <h2 class="text-center mb-4">Pacientes</h2>

<div  class="col-md-10 mx-auto p-3"></div>
    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $paciente)
            
         
          <tr>
           
            <td>{{$paciente->apellido}}</td>
            <td>{{$paciente->nombre}}</td>
            <td>{{$paciente->documento}}</td>
            <td>{{$paciente->fecha_nacimiento}}</td>
            <td>{{$paciente->sexo}}</td>
            <td>
<a href="" class="btn btn-danger mr-1">Eliminar</a>
<a href="" class="btn btn-dark mr-1">Editar</a>
<a href="{{route('pacientes.show',['paciente'=>$paciente->id])}}" class="btn btn-success mr-1">Ver</a>
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
</body>
</html>
@endsection