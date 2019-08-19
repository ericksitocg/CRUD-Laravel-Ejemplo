@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{
    Session::get('Mensaje')
}}
</div>

@endif
<a href="{{url('empleados/create')}}" class="btn btn-success">Agregar empleado</a>
<br>
<br>
<table class="table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td> {{$loop->iteration}} </td>
            <td>  
                <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100" class="img-thumbnail img-fluid">
            </td>
            <td> {{$empleado->Nombre}} {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}}</td>
            <td> {{$empleado->Correo}} </td>
            <td>
                <a href="{{ url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
                <form method="post" action="{{ url('/empleados/'.$empleado->id)}}" style="display:inline">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$empleados->links()}}
</div>
@endsection