formulario de edicion de pacientes
<br>

@extends('layouts.app')

@section('content')
<div class="container">

<div class="shadow-lg p-4">
    <form action="{{url('/paciente/'.$paciente->id)}}" method="post" enctype="multipart/form-data" >

    @csrf
    {{method_field("PATCH")}}

        <label for="Nombre"> Nombre </label>
        <input class="form-control" type="text" name="Nombre" value="{{$paciente->Nombre}}" >

        <br>
        <label for="ApellediPaterno"> Apelled Paterno </label>
        <input class="form-control" type="text" name="ApellidoPaterno" value="{{$paciente->ApellidoPaterno}}" >

        <br>
        <label for="ApellidoMaterno"> Apellido Materno </label>
        <input class="form-control" type="text" name="ApellidoMaterno" value="{{$paciente->ApellidoMaterno}}" >

        <br>
        <label for="Correo"> Correo </label>
        <input class="form-control" type="email" name="Correo" value="{{$paciente->Correo}}" >

        <br>
        <label for="Foto"> Foto </label>
        {{$paciente->Foto}}
        <input type="file" name="Foto" {{$paciente->Foto}} >

        <br>
        <input class="btn btn-success" type="submit" value="Enviar datos" >

    </form>
</div>
</div >
@endsection
