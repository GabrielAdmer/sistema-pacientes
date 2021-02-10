Motrar las listas de historial de pacientes


@extends('layouts.app')

@section('content')

<div class="container m-auto">

    <a  class="btn btn-primary mb-3" href="{{url('/paciente/create')}}">Crear Historial</a>

    <table class="table table-dark" >
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{$paciente -> id}}</td>
                    <td>{{$paciente -> Foto}}</td>
                    <td>{{$paciente -> Nombre}}</td>
                    <td>{{$paciente -> ApellidoPaterno}}</td>
                    <td>{{$paciente -> ApellidoMaterno}}</td>
                    <td>{{$paciente -> Correo}}</td>
                    <td>

                        <a class="btn btn-success mb-1" href="{{url('/paciente/'.$paciente->id.'/edit')}}">
                            Editar
                        </a>

                        <form action="{{url('/paciente/'.$paciente->id)}}" method="post" >

                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('Quires Borrar')" value="borrar" >

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
