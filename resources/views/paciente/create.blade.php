formulario de cracion de historial de pacientes
<br>

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="shadow-lg p-4">

        <form action="{{url('/paciente')}}" method="post" enctype="multipart/form-data" >
        @csrf

                <label for="Nombre"> Nombre </label>
                <input class="form-control" type="text" name="Nombre"  >

            <br>
                <label for="ApellediPaterno"> Apelled Paterno </label>
                <input class="form-control" type="text" name="ApellidoPaterno"  >

            <br>
                <label for="ApellidoMaterno"> Apellido Materno </label>
                <input class="form-control" type="text" name="ApellidoMaterno"  >
            <br>
                <label for="Correo"> Correo </label>
                <input class="form-control" type="text" name="Correo" >

            <br>
                <label for="Foto"> Foto </label>
                <input type="file" name="Foto"  >

            <br>
            <input class="btn btn-danger" type="submit" value="Enviar datos" >

        </form>

    </div>
</div>

@endsection

