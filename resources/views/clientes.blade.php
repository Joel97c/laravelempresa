@extends('layout')
@section('title','Clientes')

@section('content')

<form method="POST" action="{{ route('clientes')}}">
    @csrf
    <input type="text" name="nombre1" id="nombre1"  value="{{old('nombre1')}}" required>
    {!!$errors->first('nombre1','<small>:message</small><br>')!!}

<input type="text" name="nombre2" id="nombre2"  value="{{old('nombre2')}}"   required>
    {!!$errors->first('nombre2','<small>:message</small><br>')!!}

    <input type="text" name="apellido1" id="apellido1" value="{{old('apellido1')}}" required>
    {!!$errors->first('apellido1','<small>:message</small><br>')!!}

    <input type="text" name="apellido2" id="apellido2" value="{{old('apellido2')}}" required>
    {!!$errors->first('apellido2','<small>:message</small><br>')!!}

    <input type="text" name="cedula" id="cedula" value="{{old('cedula')}}"required>
    {!!$errors->first('cedula','<small>:message</small><br>')!!}

    <input type="text" name="direccion" id="direccion"  value="{{old('direccion')}}" required>
    {!!$errors->first('direccion','<small>:message</small><br>')!!}
    <button>Guardar</button>
   </form>
@endsection
