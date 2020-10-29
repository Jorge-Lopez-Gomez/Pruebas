@extends('layout.general')
@section('breadcum')
<li class="active">Cuenta</li>    
@endsection
@section('menu')
<ul class="nav menu">
    <li class="active">
        <a href="#"><em class="fa fa-dashboard">&nbsp;</em>Sucesos</a>
    </li>
    <li><a href="#"><em class="fa fa-calendar">&nbsp;</em>Propuestas</a></li>
    <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>Preguntas</a></li>
    <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>Estado de cuenta</a></li>
    <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
</ul>
@endsection
@section('content')
<a href="/Categorias/create"> <button type="button" class="btn btn-primary btn-lg btn-block">Crear Categoria</button></a>

<table class="table">
  <thead>
    <tr>
      <th  class = ?primay  scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">Electronica</th>
      <td>3</td>
      <td>
      	<a href="{{ url('Categorias/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Categorias/1/show') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Categorias') }}" onclick= "return confirm('Confirmar')" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <tr>
      <th scope="row">Electrodomestico</th>
      <td>3</td>
      <td>
      	<a href="{{ url('Categorias/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Categorias/1/show') }}" class="btn btn-warning">Mostra</a>
      	<a href="{{ url('Categorias') }}" onclick= "return confirm('Confirmar')" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <tr>
      <th scope="row">Ropa</th>
      <td>3</td>
      <td>
      	<a href="{{ url('Categorias/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Categorias/1/show') }}" class="btn btn-warning">Mostra</a>
      	<a href="{{ url('Categorias') }}" onclick= "return confirm('Confirmar')" class="btn btn-danger">Eliminar</a>

      </td>
    </tr>
  </tbody>
</table>





@endsection