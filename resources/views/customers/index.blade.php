@extends('base')
@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-5">Clientes</h1>
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
    <div>
      <a style="margin: 19px;" href="{{ route('customers.create')}}" class="btn btn-primary">Agregar cliente</a>
    </div>
    <table class="table table-striped">
      <thead>
          <tr>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Teléfono</td>
            <td>Tarjeta de crédito</td>
            <td colspan = 2>Acciones</td>
          </tr>
      </thead>
      <tbody>
          @foreach($customers as $customer)
          <tr>
              <td>{{$customer->name}} {{$customer->paternal_name}} {{$customer->maternal_name}}</td>
              <td>{{$customer->email}}</td>
              <td>{{$customer->phone_number}}</td>
              <td>{{$customer->credit_card_number}}</td>
              <td>
                  <a href="{{ route('customers.edit',$customer->id)}}" class="btn btn-primary">Editar</a>
              </td>
              <td>
                  <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <div class="mx-auto" style="width: 200px;">
    {{ $customers->links() }}
    </div>
  <div>
</div>
@endsection