
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{$paciente->Nombre}}" >
<br>
    <label for="ApellediPaterno"> Apelled Paterno </label>
<input type="text" name="ApellidoPaterno" value="{{$paciente->ApellidoPaterno}}" >
<br>
    <label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" name="ApellidoMaterno" value="{{$paciente->ApellidoMaterno}}" >
<br>
    <label for="Correo"> Correo </label>
<input type="text" name="Correo" value="{{$paciente->Correo}}" >

<br>
<label for="Foto"> Foto </label>
{{$paciente->Foto}}
<input type="file" name="Foto" {{$paciente->Foto}} >

<br>
<input type="submit" value="Enviar datos" >
