{{$Modo=='crear'?'Agregar Empleado':'Modificar Empleado'}}

<div class="form-group">
    <label class="control-label" for="Nombre">{{'Nombre'}}</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
    {!! $errors->first('Nombre','<div class="invalid-feedback">Ingresa el nombre del empleado</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}">
    {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">Ingresa el apellido paterno del empleado</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}">
    {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">Ingresa el apellido materno del empleado</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="Correo">{{'Correo'}}</label>
    <input class="form-control {{$errors->has('Correo')?'is-invalid':''}}" type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
    {!! $errors->first('Correo','<div class="invalid-feedback">Ingresa el correo del empleado</div>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="Foto">{{'Foto'}}</label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid"src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
    @endif
    <input class="form-control {{$errors->has('Foto')?'is-invalid':''}}" type="file" name="Foto" id="Foto" value="">
    {!! $errors->first('Foto','<div class="invalid-feedback">Ingresa un archivo con extension jpg, jpeg o png</div>') !!}

</div>

<input class="btn btn-success" type="submit" value="{{ $Modo=='crear'?'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>